<?php

include 'components/connect.php';

session_start();
error_reporting(0);

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header('location:cart.php');
}

if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $size = $_POST['Size'];
   $color = $_POST['color'];
   $size = "M";
   $color="red";
   // $customizationphoto = $_POST['customizationphoto'];
   $customization = $_POST['customization'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);
   
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? , customization = ?, size = ?,color = ?  WHERE id = ?");
   $update_qty->execute([$qty,$customization,$size,$color, $cart_id],);
   // $update_qty = $conn->prepare("UPDATE `cart` SET customization = ? WHERE id = ?");
   // $update_qty->execute([$customization, $cart_id]);
   $message[] = 'cart quantity updated';
}

?>