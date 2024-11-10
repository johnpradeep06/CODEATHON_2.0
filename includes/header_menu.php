<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
    <div class="container">
        <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Planet Shopify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">Products</a>
                    <div class="dropdown-menu">
                        <a href="products.php#watch" class="dropdown-item">Watches</a>
                        <a href="products.php#shirt" class="dropdown-item">T-Shirts</a>
                        <a href="products.php#shoes" class="dropdown-item">Shoes</a>
                        <a href="products.php#headphones" class="dropdown-item">Straws</a>
                    </div>
                </li>
                
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <?php if (isset($_SESSION['email'])) { ?>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                <?php } ?>
            </ul>

            <?php if (isset($_SESSION['email'])) { ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <li class="nav-item"><a class="nav-link" data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email']; ?>"><i class="fa fa-user-circle"></i></a></li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="#signup" class="nav-link" data-toggle="modal"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li class="nav-item"><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>

<!-- Signup modal start -->
<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="signup_script.php" method="post">
                    <div class="form-group text-center">
                        <label>Select Your Role:</label>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="role" id="customer" value="customer" checked>
                                <i class="fa fa-user" aria-hidden="true"></i> Customer
                            </label>
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="role" id="seller" value="seller">
                                <i class="fa fa-store" aria-hidden="true"></i> Seller
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class=" form-control" name="eMail" placeholder="Enter email" required>
                        <?php if (isset($_GET['error'])) { echo "<span class='text-danger'>".$_GET['error']."</span>"; } ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label for="checkbox" class="form-check-label">Agree to terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already Registered?<a href="#login" data-toggle="modal" data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Signup modal ends -->

<!-- Login modal start -->
<div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="lemail">Email or Phone:</label>
                        <input type="text" class="form-control" name="lemail" placeholder="Enter email or phone" required>
                    </div>
                    <div class="form-group">
                        <label for="lpassword">Password:</label>
                        <input type="password" class="form-control" id="lpassword" name="lpassword" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Not Registered?<a href="#signup" data-toggle="modal" data-dismiss="modal">Sign Up</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Login modal ends -->