import pandas as pd
from flask.helpers import send_from_directory
from flask_cors import CORS, cross_origin
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from flask import Flask, request, render_template, jsonify
from flask import Flask, render_template, request, redirect, url_for, session
from flask_mysqldb import MySQL
import MySQLdb.cursors
import re


def createSimilarity():
    data = pd.read_csv('main_data.csv') # reading the dataset
    cv = CountVectorizer()
    countMatrix = cv.fit_transform(data['comb'])
    similarity = cosine_similarity(countMatrix) # creating the similarity matrix
    return (data, similarity)


def getAllMovies():
    data = pd.read_csv('main_data.csv')
    return list(data['movie_title'].str.capitalize())

def Recommend(movie):
    movie = movie.lower()
    try:
        data.head()
        similarity.shape
    except:
        (data, similarity) = createSimilarity()
    if movie not in data['movie_title'].unique():
        return 'Sorry! The movie you requested is not present in our database.'
    else:
        movieIndex = data.loc[data['movie_title'] == movie].index[0]
        lst = list(enumerate(similarity[movieIndex]))
        lst = sorted(lst, key=lambda x: x[1], reverse=True)
        lst = lst[1:20]  # excluding first item since it is the requested movie itself and taking the top20 movies
        movieList = []
        for i in range(len(lst)):
            a = lst[i][0]
            movieList.append(data['movie_title'][a])
        return movieList


app = Flask(__name__, static_folder='movie-recommender-app/build',
            static_url_path='/')
CORS(app)

app.secret_key = 'your secret key'

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'root'
app.config['MYSQL_DB'] = 'geeklogin'


mysql = MySQL(app)

# @app.route('/')
# @app.route('/login', methods =['GET', 'POST'])
# def login():
# 	msg = ''
# 	if request.method == 'POST' and 'username' in request.form and 'password' in request.form:
# 		username = request.form['username']
# 		password = request.form['password']
# 		cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
# 		cursor.execute('SELECT * FROM accounts WHERE username = % s AND password = % s', (username, password, ))
# 		account = cursor.fetchone()
# 		if account:
# 			session['loggedin'] = True
# 			session['id'] = account['id']
# 			session['username'] = account['username']
# 			msg = 'Logged in successfully !'
# 			# return render_template('index.html', msg = msg)
# 			return redirect('/home')
            
# 		else:
# 			msg = 'Incorrect username / password !'
# 	return render_template('login.html', msg = msg)

# @app.route('/logout')
# def logout():
# 	session.pop('loggedin', None)
# 	session.pop('id', None)
# 	session.pop('username', None)
# 	return redirect(url_for('login'))

# @app.route('/register', methods =['GET', 'POST'])
# def register():
# 	msg = ''
# 	if request.method == 'POST' and 'username' in request.form and 'password' in request.form and 'email' in request.form :
# 		username = request.form['username']
# 		password = request.form['password']
# 		email = request.form['email']
# 		cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
# 		cursor.execute('SELECT * FROM accounts WHERE username = % s', (username, ))
# 		account = cursor.fetchone()
# 		if account:
# 			msg = 'Account already exists !'
# 		elif not re.match(r'[^@]+@[^@]+\.[^@]+', email):
# 			msg = 'Invalid email address !'
# 		elif not re.match(r'[A-Za-z0-9]+', username):
# 			msg = 'Username must contain only characters and numbers !'
# 		elif not username or not password or not email:
# 			msg = 'Please fill out the form !'
# 		else:
# 			cursor.execute('INSERT INTO accounts VALUES (NULL, % s, % s, % s)', (username, password, email, ))
# 			mysql.connection.commit()
# 			msg = 'You have successfully registered !'
# 	elif request.method == 'POST':
# 		msg = 'Please fill out the form !'
# 	return render_template('register.html', msg = msg)







@app.route('/api/movies', methods=['GET'])
@cross_origin()
def movies():
    # returns all the movies in the dataset
    movies = getAllMovies()
    result = {'arr': movies}
    return jsonify(result)




@app.route('/')
@cross_origin()
def serve():
    return send_from_directory(app.static_folder, 'index.html')


@app.route('/api/similarity/<name>')
@cross_origin()
def similarity(name):
    movie = name
    recommendations = Recommend(movie)
    if type(recommendations) == type('string'):
        resultArray = recommendations.split('---')
        apiResult = {'movies': resultArray}
        return jsonify(apiResult)
    else:
        movieString = '---'.join(recommendations)
        resultArray = movieString.split('---')
        apiResult = {'movies': resultArray}
        return jsonify(apiResult)


@app.errorhandler(404)
def not_found(e):
    return send_from_directory(app.static_folder, 'index.html')







if __name__ == '__main__':
    app.run(debug=True)
