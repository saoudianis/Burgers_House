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
    
    <!-- screen just the food -->
    <h3 style="padding-top: 80px;padding-bottom: 20px;" class="text-info text-center">The Foods :</h3>
  <div class="container">
<div id="message"></div>
    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($r))
        {
            if($row["category"]=="f"){
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= $row["p_img"] ?>" height="200"></a>
              <div class="card-body">
                <h4 class="card-title text-info">
                  <?= $row["p_name"] ?>
                </h4>
                <h5><?= $row["price"] ?> DA</h5>
                <p class="card-text"><?= $row["description"] ?></p>
              </div>
              <div class="card-footer">
                  <form class="form-submit">
                  <input type="hidden" class="pid" value="<?= $row["id"] ?>">
                      
                  <input type="hidden" class="pname" value="<?= $row["p_name"] ?>">
                      
                  <input type="hidden" class="price" value="<?= $row["price"] ?>">
                      
                  <input type="hidden" class="pimg" value="<?= $row["p_img"] ?>">
                      
                  <input type="hidden" class="pcode" value="<?= $row["p_code"] ?>">
                      
                      <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </form>
              </div>
            </div>
          </div>
        <?php } } ?>
      </div>
    </div>
    
    <?php
    $r= mysqli_query($link,"select * from menu");
    ?>  
    
    <!-- screen just the drinks -->
    <h3 style="padding-top: 80px;padding-bottom: 20px;" class="text-info text-center">The Drinks :</h3>
  <div class="container">

    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($r))
        {
            if($row["category"]=="d"){
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= $row["p_img"] ?>" height="200"></a>
              <div class="card-body">
                <h4 class="card-title text-info">
                  <?= $row["p_name"] ?>
                </h4>
                <h5><?= $row["price"] ?> DA</h5>
                <p class="card-text"><?= $row["description"] ?></p>
              </div>
              <div class="card-footer">
                <form class="form-submit">
                  <input type="hidden" class="pid" value="<?= $row["id"] ?>">
                      
                  <input type="hidden" class="pname" value="<?= $row["p_name"] ?>">
                      
                  <input type="hidden" class="price" value="<?= $row["price"] ?>">
                      
                  <input type="hidden" class="pimg" value="<?= $row["p_img"] ?>">
                      
                  <input type="hidden" class="pcode" value="<?= $row["p_code"] ?>">
                      
                      <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </form>
              </div>
            </div>
          </div>
        <?php } } ?>
      </div>
    </div>
    
    
    <?php
    $r= mysqli_query($link,"select * from menu");
    ?>  
    <!-- screen just the sweets -->
    <h3 style="padding-top: 80px;padding-bottom: 20px;" class="text-info text-center">The Sweets :</h3>
  <div class="container">

    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($r))
        {
            if($row["category"]=="s"){
        ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= $row["p_img"] ?>" height="200"></a>
              <div class="card-body">
                <h4 class="card-title text-info">
                  <?= $row["p_name"] ?>
                </h4>
                <h5><?= $row["price"] ?> DA</h5>
                <p class="card-text"><?= $row["description"] ?></p>
              </div>
              <div class="card-footer">
                <form class="form-submit">
                  <input type="hidden" class="pid" value="<?= $row["id"] ?>">
                      
                  <input type="hidden" class="pname" value="<?= $row["p_name"] ?>">
                      
                  <input type="hidden" class="price" value="<?= $row["price"] ?>">
                      
                  <input type="hidden" class="pimg" value="<?= $row["p_img"] ?>">
                      
                  <input type="hidden" class="pcode" value="<?= $row["p_code"] ?>">
                      
                      <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                  </form>
              </div>
            </div>
          </div>
        <?php } } ?>
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
        $(".addItemBtn").click(function(e){
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var price = $form.find(".price").val();
            var pimg = $form.find(".pimg").val();
            var pcode = $form.find(".pcode").val();
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: {pid:pid,pname:pname,price:price,pimg:pimg,pcode:pcode},
                success:function(response){
                   $("#message").html(response);
                    window.scrollTo(0,0);
                    load_cart_item_number();
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
    