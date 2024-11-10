<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700' rel='stylesheet'>
</head>
<body style="margin: 0; font-family: 'Poppins', sans-serif; background-color: #f8f9fa;">
    <!--header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--header ends-->

    <div class="container" style="margin-top: 80px; padding: 0 20px;">
        <!--hero section-->
        <div style="
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 1rem;
            padding: 3rem 2rem;
            text-align: center;
            color: white;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <h1 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                Welcome to Planet Shopify!
            </h1>
            <p style="font-size: 1.1rem; opacity: 0.9; max-width: 600px; margin: 0 auto;">
                We have wide range of products for you. No need to hunt around, we have all in one place
            </p>
        </div>

        <!--breadcrumb-->
        <nav aria-label="breadcrumb" style="margin-bottom: 2rem;">
            <ol class="breadcrumb" style="background-color: white; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <li class="breadcrumb-item"><a href="index.php" style="color: #667eea; text-decoration: none;">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #4a5568;">Products</li>
            </ol>
        </nav>

        <!--products grid-->
        <div class="row" id="eco-products">
            <?php
            $products = [
                [
                    'id' => 1,
                    'image' => 'images/brush.webp',
                    'name' => 'Bamboo Toothbrush',
                    'price' => 150
                ],
                [
                    'id' => 2,
                    'image' => 'images/waterbottle.jpg',
                    'name' => 'Reusable Water Bottle',
                    'price' => 500
                ],
                [
                    'id' => 3,
                    'image' => 'images/cotton.webp',
                    'name' => 'Organic Cotton Tote Bag',
                    'price' => 250
                ],
                [
                    'id' => 4,
                    'image' => 'images/straw.jpeg',
                    'name' => 'Stainless Steel Straw Set',
                    'price' => 200
                ],
                [
                    'id' => 5,
                    'image' => 'images/tshirt.jpeg',
                    'name' => 'organic tshirt',
                    'price' => 400	
                ],
                [
                    'id' => 6,
                    'image' => 'images/watch.webp',
                    'name' => 'Bamboo Watch',
                    'price' => 300
                ],
                [
                    'id' => 9,
                    'image' => 'images/shoes.webp',
                    'name' => 'eco tailored shoes',
                    'price' => 8000
                ]
            ];

            foreach($products as $product): ?>
                <div class="col-md-3 col-6 mb-4">
                    <div style="
                        background: white;
                        border-radius: 1rem;
                        overflow: hidden;
                        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                        transition: transform 0.3s;"
                        onmouseover="this.style.transform='translateY(-5px)'"
                        onmouseout="this.style.transform='translateY(0)'">
                        <div style="height: 200px; overflow: hidden;">
                            <img src="<?php echo $product['image']; ?>" 
                                alt="<?php echo $product['name']; ?>"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;"
                                onmouseover="this.style.transform='scale(1.1)'"
                                onmouseout="this.style.transform='scale(1)'">
                        </div>
                        <div style="padding: 1.5rem;">
                            <h6 style="font-weight: 600; color: #1f2937; margin-bottom: 0.5rem; font-size: 1rem;">
                                <?php echo $product['name']; ?>
                            </h6>
                            <h6 style="color: #667eea; font-weight: 600; margin-bottom: 1rem;">
                                Price: Rs <?php echo $product['price']; ?>
                            </h6>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="index.php#login" role="button" 
                                   style="
                                        display: inline-block;
                                        background-color: #10b981;
                                        color: white;
                                        padding: 0.5rem 1rem;
                                        border-radius: 0.5rem;
                                        text-decoration: none;
                                        font-weight: 500;
                                        transition: background-color 0.3s;"
                                   onmouseover="this.style.backgroundColor='#059669'"
                                   onmouseout="this.style.backgroundColor='#10b981'">
                                    Add To Cart
                                </a>
                            <?php } else {
                                if (check_if_added_to_cart($product['id'])) { ?>
                                    <a href="#" class="btn btn-success" style="opacity: 0.8; cursor: default;" disabled>
                                        Added to cart
                                    </a>
                                <?php } else { ?>
                                    <a href="cart-add.php?id=<?php echo $product['id']; ?>" 
                                       name="add" 
                                       value="add" 
                                       style="
                                            display: inline-block;
                                            background-color: #10b981;
                                            color: white;
                                            padding: 0.5rem 1rem;
                                            border-radius: 0.5rem;
                                            text-decoration: none;
                                            font-weight: 500;
                                            transition: background-color 0.3s;"
                                       onmouseover="this.style.backgroundColor='#059669'"
                                       onmouseout="this.style.backgroundColor='#10b981'">
                                        Add to cart
                                    </a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!--footer-->
    <?php include 'includes/footer.php'?>
    <!--footer ends-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });

    <?php if (isset($_GET['error'])): ?>
        $(document).ready(function(){
            $('#signup').modal('show');
        });
        alert('<?php echo $_GET['error']; ?>');
    <?php endif; ?>

    <?php if (isset($_GET['errorl'])): ?>
        $(document).ready(function(){
            $('#login').modal('show');
        });
        alert('<?php echo $_GET['errorl']; ?>');
    <?php endif; ?>
    </script>
</body>
</html>