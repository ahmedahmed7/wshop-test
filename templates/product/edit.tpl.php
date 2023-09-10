<?php
$product = $this->product;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FW TEST - PRODUCT DETAIL</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">EDIT PRODUCT</h1>
    </header>

    <div class="row text-center">

        <div class="container">
            <form method="post" action="product_edit.php">
                <input type="hidden" name="id" value="<?php echo $product->_array_datas["produit_id"]; ?>"> <!-- Replace 123 with your ID -->
                <div class="mb-3">
                    <label for="productTitle" class="form-label">Product Title</label>
                    <input type="text" class="form-control" id="productTitle" name="productTitle" value="<?php echo $product->_array_datas["produit_titreobjet"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="productTitle" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="productPrice" name="productPrice" value="<?php echo $product->_array_datas["produit_prixvente"]; ?>">
                </div
                <div class="mb-3">
                    <label for="productTitle" class="form-label">Product Discount</label>
                    <input type="text" class="form-control" id="productDiscount" name="productDiscount" value="<?php echo $product->_array_datas["produit_prixremise"]; ?>">
                </div>

                <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
    <!-- /.col-lg-9 -->

</div>
<!-- /.container -->

</body>

</html>
