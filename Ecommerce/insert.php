<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div1">
        <form action="insert.php" method="post" enctype="multipart/form-data">

        <label for="">Insert Product Name</label><br>
        <input class="product_name" type="text" name="product_name" placeholder="Insert Product Name" required>
        <br><br>
        <label for="">Insert Product Price</label><br>
        <input class="product_price" type="text" name="product_price" placeholder="Insert Product Price" required>
        <br><br>
        <label for="">Insert Product Details</label><br>
        <textarea class="product_details" name="product_details" id="" cols="80" rows="20" required></textarea>
        <br><br>
        <label for="">Insert Product Image</label>
        <input class="product_image" type="file" name="product_image" required >
        <button type="submit" class="insert btn btn-primary" name="insert">Insert</button>

             
        </form>

        <?php

        include 'db.php';

        if(isset($_POST['insert'])){
            $product_name=$_POST['product_name'];
            $product_price=$_POST['product_price'];
            $product_details=$_POST['product_details'];
            $image_name=$_FILES['product_image']['name'];
            $image_size=$_FILES['product_image']['size'];
            $image_type=$_FILES['product_image']['type'];
            $image_tem_loc=$_FILES['product_image']['tmp_name'];
            $image_store="image/".$image_name;
            move_uploaded_file($image_tem_loc,$image_store);

            $sql="INSERT INTO products(product_name,product_price,product_details,product_image) VALUES('$product_name','$product_price','$product_details','$image_name')";
            $query=mysqli_query($conn,$sql);
        }
        ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>