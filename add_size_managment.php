<?php include("./header.php"); ?>
<main>
    <div class="admin_page add_prod_manag add_size_manag">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>
                <img src="assets/images/back_arrow.svg" alt="" class="back_arrow">Add Size Management
                    <a href=""><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="upload_image">
                            <img src="assets/images/banner_img1.jfif" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form action="">
                            <div class="form_field">
                                <label for="">Title</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field">
                                <label for="">Size Type</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    6x8, 15x20 cm, 6”x8”
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                            <div class="form_field">
                                <label for="">Price</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field">
                                <label for="">Frames</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    16*6 cm
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        Option 1
                                    </a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form action="">
                            <div class="form_field">
                                <label for="">Title 2</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field">
                                <label for="">Category</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    select
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                            <div class="form_field">
                                <label for="">No. of Image</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field cc">
                                <label for="">Colors</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    16*6 cm
                                    <img src="assets/images/color-picker.png" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        Option 1
                                    </a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12">
                        <div class="common_btn2">
                            <a href="">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<?php include("./footer.php"); ?>