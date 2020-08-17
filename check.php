<?php
session_start();
error_reporting(0);
    require 'src/php/functions/connect.php';
$id = $_SESSION['id'];
$total= 0;
$allItems = '';
$items = array();


$sql = "SELECT CONCAT(p_name, '(',qty,')') AS ItemQty , total_price from cart";
$stmt = $link->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_assoc()){
    $total +=$row['total_price'];
    $items[]= $row['ItemQty'];
}
$total += 100;

//make a array to a string
$allItems = implode(", ",$items);

//orderlist table
$r="select * from user where id='$id'";
$pin=mysqli_query($link,$r);
$row= mysqli_fetch_array($pin);

$order="INSERT INTO `orderlist` (`id`, `price`, `order`, `pin`, `status`, `user`) VALUES (NULL, '$total', '$allItems', '$row[pin]', 'accepted', '$id')";
mysqli_query($link,$order);

$del="delete from `cart` WHERE `cart`.`user`='$id'";
mysqli_query($link,$del);

?>



<?php
//head
include("src/php/head.php");
?>

</head>
<body>
   <?php
    //topheader
include("src/php/topheader.php");
    //header
    include("src/php/log_header.php");
?> 
 <?php
    include("src/php/functions/connect.php");
    $r= mysqli_query($link,"select * from menu");
    
    ?>   
    
    <!-- complet order -->
    
  <div class="container">
     <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4">
         <h3 style="padding-top: 80px;padding-bottom: 20px;" class="text-center text-info text-center">Your Order Was Completed</h3>
          
          <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s): </b><?= $allItems; ?></h6>
              <h6 class="lead">Delivery Charge : 100DA</h6>
          <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead" style="color:red;"><b>Total: </b><?= $total; ?> DA</h6>
        </div>
          
         </div>
          <img src="https://thumbs.gfycat.com/ShyCautiousAfricanpiedkingfisher-size_restricted.gif" height="200" width="100%">
      </div> 
      
    </div>
    
    </div>
 
    
    <?php
    //appointment
include("src/php/appointment.php");
    //footer
    include("src/php/footer.php");
    //copyright
    include("src/php/log_copyright.php");
?>
    
    
    
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        
        load_cart_item_number();
        
      function load_cart_item_number(){
          $.ajax({
            url: 'action.php',
            method: 'get',
              data: {cartItem:"cart_item"},
              success:function(response){
                $("#cart-item").html(response);  
              }
          });
          
      } 
        
    });
    </script>
    </body>

</html>
    