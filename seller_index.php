<?php
session_start();

// Check if the user is logged in and is a seller
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'seller') {
    header("Location: login.php");
    exit();
}

// Handle product upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/common.php'; // Make sure to create this file with your DB connection

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    
    $query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    
    if(mysqli_query($con, $query)) {
        $success_msg = "Product added successfully!";
    } else {
        $error_msg = "Error adding product: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700' rel='stylesheet'>
</head>
<body style="font-family: 'Poppins', sans-serif; background-color: #f8f9fa;">
    <!-- Navigation -->
    <nav style="background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); padding: 1rem 0;">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 style="margin: 0; color: #1f2937; font-weight: 600;">Seller Dashboard</h4>
            <a href="logout_script.php" style="
                color: #dc2626;
                text-decoration: none;
                font-weight: 500;
                transition: color 0.3s;"
               onmouseover="this.style.color='#991b1b'"
               onmouseout="this.style.color='#dc2626'">
                <i class="fa fa-sign-out"></i> Logout
            </a>
        </div>
    </nav>

    <div class="container" style="padding: 2rem 1rem;">
        <!-- Dashboard Stats -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div style="
                    background: white;
                    border-radius: 1rem;
                    padding: 1.5rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937;">Products</h3>
                            <?php
                            include 'includes/common.php';
                            $result = mysqli_query($con, "SELECT COUNT(*) as count FROM products");
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            <p style="font-size: 2rem; font-weight: 700; color: #667eea; margin: 0;">
                                <?php echo $row['count']; ?>
                            </p>
                        </div>
                        <i class="fa fa-shopping-bag" style="font-size: 2.5rem; color: #667eea; opacity: 0.2;"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div style="
                    background: white;
                    border-radius: 1rem;
                    padding: 1.5rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937;">Total Sales</h3>
                            <p style="font-size: 2rem; font-weight: 700; color: #059669; margin: 0;">₹0</p>
                        </div>
                        <i class="fa fa-line-chart" style="font-size: 2.5rem; color: #059669; opacity: 0.2;"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div style="
                    background: white;
                    border-radius: 1rem;
                    padding: 1.5rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 600; color: #1f2937;">Orders</h3>
                            <p style="font-size: 2rem; font-weight: 700; color: #dc2626; margin: 0;">0</p>
                        </div>
                        <i class="fa fa-shopping-cart" style="font-size: 2.5rem; color: #dc2626; opacity: 0.2;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upload Product Form -->
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div style="
                    background: white;
                    border-radius: 1rem;
                    padding: 2rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <h2 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">
                        Add New Product
                    </h2>

                    <?php if(isset($success_msg)): ?>
                        <div style="
                            background-color: #ecfdf5;
                            color: #059669;
                            padding: 1rem;
                            border-radius: 0.5rem;
                            margin-bottom: 1rem;">
                            <?php echo $success_msg; ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($error_msg)): ?>
                        <div style="
                            background-color: #fef2f2;
                            color: #dc2626;
                            padding: 1rem;
                            border-radius: 0.5rem;
                            margin-bottom: 1rem;">
                            <?php echo $error_msg; ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div style="margin-bottom: 1.5rem;">
                            <label for="name" style="
                                display: block;
                                margin-bottom: 0.5rem;
                                color: #4b5563;
                                font-weight: 500;">
                                Product Name
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   required 
                                   style="
                                    width: 100%;
                                    padding: 0.75rem;
                                    border: 1px solid #e5e7eb;
                                    border-radius: 0.5rem;
                                    font-size: 1rem;
                                    transition: border-color 0.3s;"
                                   onmouseover="this.style.borderColor='#667eea'"
                                   onmouseout="this.style.borderColor='#e5e7eb'">
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <label for="price" style="
                                display: block;
                                margin-bottom: 0.5rem;
                                color: #4b5563;
                                font-weight: 500;">
                                Price (₹)
                            </label>
                            <input type="number" 
                                   id="price" 
                                   name="price" 
                                   required 
                                   style="
                                    width: 100%;
                                    padding: 0.75rem;
                                    border: 1px solid #e5e7eb;
                                    border-radius: 0.5rem;
                                    font-size: 1rem;
                                    transition: border-color 0.3s;"
                                   onmouseover="this.style.borderColor='#667eea'"
                                   onmouseout="this.style.borderColor='#e5e7eb'">
                        </div>

                        <button type="submit" style="
                            background-color: #667eea;
                            color: white;
                            padding: 0.75rem 1.5rem;
                            border: none;
                            border-radius: 0.5rem;
                            font-weight: 500;
                            cursor: pointer;
                            transition: background-color 0.3s;"
                            onmouseover="this.style.backgroundColor='#5a67d8'"
                            onmouseout="this.style.backgroundColor='#667eea'">
                            Add Product
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Recent Products Table -->
        <div class="row mt-4">
            <div class="col-12">
                <div style="
                    background: white;
                    border-radius: 1rem;
                    padding: 2rem;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <h2 style="font-size: 1.5rem; font-weight: 600; color: #1f2937; margin-bottom: 1.5rem;">
                        Recent Products
                    </h2>
                    
                    <div class="table-responsive">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="padding: 1rem; text-align: left; border-bottom: 2px solid #e5e7eb; color: #4b5563;">ID</th>
                                    <th style="padding: 1rem; text-align: left; border-bottom: 2px solid #e5e7eb; color: #4b5563;">Name</th>
                                    <th style="padding: 1rem; text-align: left; border-bottom: 2px solid #e5e7eb; color: #4b5563;">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM products ORDER BY id DESC LIMIT 5");
                                while($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td style="padding: 1rem; border-bottom: 1px solid #e5e7eb;"><?php echo $row['id']; ?></td>
                                        <td style="padding: 1rem; border-bottom: 1px solid #e5e7eb;"><?php echo $row['name']; ?></td>
                                        <td style="padding: 1rem; border-bottom: 1px solid #e5e7eb;">₹<?php echo $row['price']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>