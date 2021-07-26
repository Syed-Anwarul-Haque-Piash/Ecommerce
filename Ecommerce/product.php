<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .div3{
            width:250px;
            border:1px solid black;
            float: left;
            margin-left:15px;
            background-color:#D88FD8;
        }
        img{
            width:200px;
            height:200px;
            margin-left:30px;
        }
        p{
            background-color:#17A288;
            margin-top:0px;
            text-align:center;
            font-size:30px;
            font-weight:bold;
            color:white;
            padding:7px;
        }
        h3{
            margin-left:70px;
        }
        .quantity{
            width:150px;
            margin-left:30px;
            padding:10px;
            margin-bottom:10px;
            border-radius:10px;
            border:1px solid black;
        }
    </style>
    
</head>
<body>
    <div class="div2">
        <?php

        include 'db.php';

        $sql= "SELECT * FROM products";
        $query=mysqli_query($conn,$sql);
        while($info=mysqli_fetch_array($query)){
            ?>
         <div class="div3">
             <p><?php echo $info['product_name'];?></p>
             <img src="image/<?php echo  $info['product_image'];?>" alt="">
             <h3>Price: <?php echo $info['product_price'];?></h3>
             <form action="product.php" method="post">
                 <input class="quantity" type="number" name="quantity" placeholder="Enter Quantity">
             </form>
         </div>   

        <?php    
        }
        
        
        
        ?>
    </div>
</body>
</html>