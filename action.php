<?php
session_start();
error_reporting(0);
require 'src/php/functions/connect.php';
$id = $_SESSION['id'];

    if(isset($_POST['pid'])){
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $pimg = $_POST['pimg'];
        $pcode = $_POST['pcode'];
        $pqty = 1;
        
        $stmt = $link->prepare("select p_code from cart where p_code=?");
        $stmt->bind_param("s",$pcode);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['p_code'];
        if(!$code){
            $query = $link->prepare("INSERT INTO cart (p_name,price,p_img,qty,total_price,p_code,user) VALUES (?,?,?,?,?,?,?)");
            $query->bind_param("sssissi",$pname,$price,$pimg,$pqty,$price,$pcode,$id);
            $query->execute();
            echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Item added to your cart</strong> 
</div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Item  alrady added to your cart</strong> 
</div>';
        }
    }

if(isset($_GET['cartItem']) && isset($_GET['cartItem'])=='cart_item'){
  $stmt = $link->prepare("select * from cart where user='$id'");  
  $stmt->execute();
    $stmt->store_result();
    $rows = $stmt->num_rows;
    echo $rows;
}

if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    $stmt = $link->prepare("delete from cart where id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    
    $_SESSION['showAlert'] = 'block';
    $_SESSION['message'] = 'Item removed from the cart';
    header('location:cart.php');
}


if(isset($_POST['qty'])){
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];
    $sel="SELECT price FROM `cart` WHERE id='$pid'";
    $res = mysqli_query($link,$sel);
    $row=mysqli_fetch_array($res);
  $pprice = $row['price'];  
  $tprice = $qty*$pprice ;  
  
    $stmt = $link->prepare("update cart set qty=?, total_price=? where `cart`.`id` =?");
    
    $stmt->bind_param("isi",$qty,$tprice,$pid);
    $stmt->execute();
    
}

?>