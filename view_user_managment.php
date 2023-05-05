<?php include("./header.php"); ?>
<main>
    <div class="admin_page view_user_manag">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>
                    <img src="assets/images/back_arrow.svg" alt="" class="back_arrow">View User Management
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="view_ig_tab">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#1ui" data-toggle="tab">User Information</a>
                        </li>
                        <li><a href="#2g" data-toggle="tab">Gallery</a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix vum_inner">
                        <div class="tab-pane active" id="1ui">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="vum_left">
                                        <div class="img_or_btns">
                                            <div class="user_image">
                                                <img src="assets/images/user_img.jpg" alt="">
                                            </div>
                                            <div class="ae_btn">
                                                <div class="active_btn">
                                                    <span>active</span>
                                                </div>
                                                <div class="common_btn2">
                                                    <a href="./edit_user_managment.php">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="u_info">
                                            <div class="info_single">
                                                <h5>firts name</h5>
                                                <h6>Louise</h6>
                                            </div>
                                            <div class="info_single">
                                                <h5>Last Name</h5>
                                                <h6>Martineau</h6>
                                            </div>
                                            <div class="info_single">
                                                <h5>Email</h5>
                                                <h6>danten@mail.ru</h6>
                                            </div>
                                            <div class="info_single">
                                                <h5>Phone No.</h5>
                                                <h6>+7 8885855658</h6>
                                            </div>
                                            <div class="info_single">
                                                <h5>Address 2</h5>
                                                <h6>21833 Clyde Gallagher Parkway</h6>
                                            </div>
                                            <div class="info_single">
                                                <h5>Address 3</h5>
                                                <h6>4517 Washington Ave. Manchester, Kentucky 39495</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="vum_right">
                                        <h3>Address</h3>
                                        <div class="vumr_inner">
                                            <div class="address_box">
                                                <h5>Primary Delivery Address</h5>
                                                <h6>Mr. Luke Wheeler <br> <span>4517 Washington Ave. Manchestor, Kentucky 39495</span></h6>
                                                <h6>Phone No <span>+7 8956676469</span></h6>
                                                <h6>Email <span>email@gmail.com</span></h6>
                                            </div>
                                            <div class="address_box mt-4">
                                                
                                                <h6>Mr. Luke Wheeler <br> <span>4517 Washington Ave. Manchestor, Kentucky 39495</span></h6>
                                                <h6>Phone No <span>+7 8956676469</span></h6>
                                                <h6>Email <span>email@gmail.com</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="2g">
                            <div class="gallery_inner">
                                <div class="g_img_single">
                                    <img src="assets/images/w1.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w2.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w3.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w4.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w5.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w6.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w7.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w8.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w9.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w10.jfif" alt="">
                                </div>
                                <div class="g_img_single">
                                    <img src="assets/images/w11.jfif" alt="">
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