<!-- Header -->
<?php include 'include/header.php'; ?>

<!-- Banner -->
<div class="banner banner--mini">
    <div class="banner__bg wow fadeInUpBig">
        <img src="images/banner-bg-1.png" alt="image" class="imgFluid">
    </div>
    <div class="container wow zoomIn" data-wow-delay="750ms">
        <div class="row">
            <div class="col-12">
                <div class="banner__content section-content section-content--light">
                    <h3 class="heading">Sign Up</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 my-5 wow zoomIn">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5">
            <div class="section-content text-center mb-4">
                <div class="heading">Sign Up</div>
            </div>
            <form action="#" class="auth-form">
                <div class="input-field">
                    <label>Username <span class="required">*</span></label>
                    <input type="text">
                </div>
                <div class="input-field">
                    <label>Email Address <span class="required">*</span></label>
                    <input type="email">
                </div>
                <div class="input-field">
                    <label>Password <span class="required">*</span></label>
                    <input type="password">
                </div>
                <div class="input-field">
                    <label>re-enter Password <span class="required">*</span></label>
                    <input type="password">
                </div>
                <div class="input-field--radio">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="themeBtn themeBtn--full mt-4 mb-3">Sign up</button>
                <div class="note">Already have an account? <a href="signin.php">Signin Now</a></div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'include/footer.php'; ?>