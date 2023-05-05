<?php include("./header.php"); ?>
<main>
    <section class="login_signup two_col">
        <div class="col_1">
            <div class="inner">
                <div class="logo">
                    <img src="./assets/images/logo.svg" alt="">
                </div>
                <h2 class="title">
                    welcome back
                </h2>
                <h5 class="short_desc">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.
                </h5>
                <form action="">
                    <div class="form_field">
                        <label for="">Email</label>
                        <input type="email">
                        <img src="./assets/images/mail_icon.svg" alt="">
                    </div>
                    <div class="form_field">
                        <label for="">Password</label>
                        <input type="password">
                        <img src="./assets/images/pass_icon.svg" alt="">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember">
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 forg_pass">
                            <a href="./reset_password.php">
                                <h6>Forgot Password?</h6>
                            </a>
                        </div>
                    </div>
                    <div class="common_btn">
                        <a href="">login</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col_2">
            <div class="inner">
                <div class="content_box">
                    <h3>“ Lorem Ipsum is simply dummy text of the printing and typesetting industry”</h3>
                    <h5>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</h5>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("./footer.php"); ?>