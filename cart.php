<?php
session_start();

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
    $id = $_SESSION['id'];
    $r= mysqli_query($link,"select * from cart where user='$id'");
    $total = 0;
    ?>
    
<section style="padding-top: 100px" class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">YOUR CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            
            <div style="display:<?php if(isset($_SESSION['showAlert'])){
    echo $_SESSION['showAlert'];}else{
    echo 'none';} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?php if(isset($_SESSION['message'])){
    echo $_SESSION['message'];} unset($_SESSION['showAlert']); ?></strong>
</div>
            
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                while ($row = mysqli_fetch_array($r)){
                        ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <input type="hidden" class="pid" value="<?= $row["id"] ?>">
                            
                            <td>
                                <img src="<?= $row["p_img"] ?>" height="50" width="100" /> 
                            </td>
                            <td>
                                <?= $row["p_name"] ?></td>
                            <td>
                                In stock
                            </td>
                            <td>
                                <input class="form-control itemQty" type="number" value="<?= $row["qty"] ?>" />
                            </td>
                            <td class="text-right">
                                <?= $row["total_price"] ?> DA
                            </td>
                            <input type="hidden" class="pprice" value="<?= $row["total_price"] ?>">
                            
                            <td class="text-right">
                                <a href="action.php?remove=<?= $row["id"] ?>" onclick="return confirm('are you sure want to remove this item ?');"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button></a> 
                            </td>
                        </tr>
                        <?php
                
                    $total=$total+$row["total_price"];
                } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right"><?=$total ?> DA</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">100 DA</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?=$total+100 ?> DA</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="store.php"><button class="btn btn-block btn-light">Continue Shopping</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="check.php" onclick="return confirm('Are you sure want to checkout ?');" class="<?= ($total>1)?"":"disabled"; ?> btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
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
        
        $(".itemQty").on('change',function(){
            
            var $el = $(this).closest('tr');
            var pid = $el.find(".pid").val();
            var pprice = $el.find(".pprice").val();
            var qty = $el.find(".itemQty").val();
            location.reload(true);
            $.ajax({
                url: 'action.php',
                method: 'post',
                cache: false,
                data: {qty:qty,pid:pid,pprice:pprice},
                   success: function(response){
                
                console.log(response);
            }
            });
        });
        
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
    