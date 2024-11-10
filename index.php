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
    <!--Header-->
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    
    <!-- Hero Section -->
    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 80vh; display: flex; align-items: center; position: relative; overflow: hidden;">
        <div class="container" style="position: relative; z-index: 2;">
            <div style="max-width: 800px; margin: 0 auto; text-align: center; padding: 40px 20px; color: white;">
                <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                    We sell Happiness :)
                </h1>
                <p style="font-size: 1.25rem; margin-bottom: 2rem; opacity: 0.9;">
                    Flat 40% OFF on eco friendly products 
                </p>
                <a href="products.php" style="
                    display: inline-block;
                    background-color: #fbbf24;
                    color: white;
                    padding: 1rem 2.5rem;
                    border-radius: 0.5rem;
                    font-weight: 600;
                    text-decoration: none;
                    transition: transform 0.2s;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);"
                    onmouseover="this.style.transform='scale(1.05)'"
                    onmouseout="this.style.transform='scale(1)'">
                    Shop Now
                </a>
            </div>
        </div>
    </div>

    <!-- Category Title -->
    <div style="text-align: center; padding: 4rem 0 2rem;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #1f2937; margin-bottom: 1rem;">
            Be Fashionable and Eco Friendly
        </h2>
        <div style="width: 60px; height: 4px; background-color: #fbbf24; margin: 0 auto;"></div>
    </div>

    <!-- Product Categories -->
    <div class="container" style="padding: 2rem 1rem 4rem;">
        <div class="row">
            <?php
            $categories = [
                ['name' => 'Watches', 'image' => 'images/watch.webp', 'link' => 'products.php#watch'],
                ['name' => 'Clothing', 'image' => 'images/tshirt.jpeg', 'link' => 'products.php#shirt'],
                ['name' => 'Shoes', 'image' => 'images/shoes.webp', 'link' => 'products.php#shoes'],
                ['name' => 'Straw', 'image' => 'images/straw.jpeg', 'link' => 'products.php#straw']
            ];

            foreach($categories as $category): ?>
                <div class="col-6 col-md-3 mb-4">
                    <a href="<?php echo $category['link']; ?>" style="text-decoration: none;">
                        <div style="
                            background: white;
                            border-radius: 1rem;
                            overflow: hidden;
                            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                            transition: transform 0.3s;"
                            onmouseover="this.style.transform='translateY(-5px)'"
                            onmouseout="this.style.transform='translateY(0)'">
                            <div style="height: 250px; overflow: hidden;">
                                <img src="<?php echo $category['image']; ?>" 
                                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;"
                                     onmouseover="this.style.transform='scale(1.1)'"
                                     onmouseout="this.style.transform='scale(1)'"
                                     alt="<?php echo $category['name']; ?>">
                            </div>
                            <div style="padding: 1.5rem; text-align: center;">
                                <h3 style="margin: 0; color: #1f2937; font-weight: 600; font-size: 1.25rem;">
                                    <?php echo $category['name']; ?>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Features Section -->
    <div style="background-color: white; padding: 4rem 0;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div style="padding: 2rem;">
                        <i class="fa fa-truck" style="font-size: 2.5rem; color: #667eea; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Free Shipping</h3>
                        <p style="color: #6b7280; margin: 0;">On orders over $100</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div style="padding: 2rem;">
                        <i class="fa fa-shield" style="font-size: 2.5rem; color: #667eea; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Secure Payment</h3>
                        <p style="color: #6b7280; margin: 0;">100% secure payment</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div style="padding: 2rem;">
                        <i class="fa fa-refresh" style="font-size: 2.5rem; color: #667eea; margin-bottom: 1rem;"></i>
                        <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Easy Returns</h3>
                        <p style="color: #6b7280; margin: 0;">30 days return policy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php include 'includes/footer.php'?>
    <!--footer end-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
        
        if(window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }
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