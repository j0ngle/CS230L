<?php 
	require 'includes/header.php'
?>

<main>
<link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <!-- Carousel -->
        <div class="container" style="padding-top: 20px">
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#slides" data-slide-to="0" class="active"></li>
                  <li data-target="#slides" data-slide-to="1"></li>
                  <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/ScubaDuba.jpg" class="d-block mx-auto" alt="Scuba Cat" style="width:640px; height:360px">
                  </div>
                  <div class="carousel-item">
                    <img src="images/City_Block.jpg" class="d-block mx-auto" alt="City Block" style="width:640px; height:360px">
                  </div>
                  <div class="carousel-item">
                    <img src="images/Donut_Render.png" class="d-block mx-auto" alt="Donuts" style="width:640px; height:360px">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- Login stuff -->
        <!-- h-100 allows the container to take up 100% of its parent-->
        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: whitesmoke;">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Username or Email Address</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username / Email address" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="text-align: left">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Sign in</button>
                    <div style="padding-top:16px"><a href="signup.php">New? Sign up here!</a><div>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>
    </div>
</main>