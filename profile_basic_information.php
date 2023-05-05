<?php include("./header.php"); ?>
<main>
    <div class="admin_page view_user_manag profile">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Profile
                    <a href=""><img src="assets/images/active_profile_icon.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="view_ig_tab">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#1ui" data-toggle="tab">Basic Information</a>
                        </li>
                        <li><a href="#2g" data-toggle="tab">Change Password</a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix vum_inner">
                        <div class="tab-pane active" id="1ui">
                            <div class="profile_inner">
                                <div class="upp_bg">
                                    <div class="user_profile_pic">
                                        <img class="upp_img" src="assets/images/user_img.jpg" alt="">
                                        <div class="upp_edit">
                                            <img src="assets/images/blue_edit_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="profile_info">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="">
                                                <div class="form_field">
                                                    <label for="">First Name</label>
                                                    <input type="text">
                                                </div>
                                                <div class="form_field">
                                                    <label for="">Phone Number</label>
                                                    <input type="number">
                                                </div>
                                                <div class="form_field">
                                                    <label for="">Address 1</label>
                                                    <input type="text">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="">
                                                <div class="form_field">
                                                    <label for="">Last Name</label>
                                                    <input type="text">
                                                </div>
                                                <div class="form_field">
                                                    <label for="">Email</label>
                                                    <input type="email">
                                                </div>
                                                <div class="form_field">
                                                    <label for="">Address 2</label>
                                                    <input type="text">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="common_btn2">
                                    <a href="">Save</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2g">
                        <div class="profile_inner">
                                <div class="upp_bg">
                                    <div class="user_profile_pic">
                                        <img class="upp_img" src="assets/images/user_img.jpg" alt="">
                                        <div class="upp_edit">
                                            <img src="assets/images/blue_edit_icon.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="profile_info">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="">
                                                <div class="form_field">
                                                    <label for="">Old Password</label>
                                                    <input type="password">
                                                </div>
                                                <div class="form_field">
                                                    <label for="">Confirm Password</label>
                                                    <input type="Password">
                                                </div>                                       
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <form action="">
                                                <div class="form_field">
                                                    <label for="">New Password</label>
                                                    <input type="password">
                                                </div>                                         
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="common_btn2">
                                    <a href="">Save</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php include("./footer.php"); ?>