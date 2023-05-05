<?php include("./header.php"); ?>
<main>
    <div class="admin_page add_prod_manag">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>
                    <img src="assets/images/back_arrow.svg" alt="" class="back_arrow">Add Product Management
                    <a href=""><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="">
                            <div class="dropdown form_field">
                                <label for="">Select Category</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Wordpress Event
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                </div>
                            </div>
                            <div class="form_field">
                                <label for="">Product Type</label>
                                <input type="text">
                            </div>
                            <div class="form_field">
                                <label for="">Width(cm)</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field check_right">
                                <label for="">Frames</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    16*6 cm
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="f1">
                                            <label class="custom-control-label" for="f1">16 x 6 cm</label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="f2">
                                            <label class="custom-control-label" for="f2">12 x 12 cm</label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="f3">
                                            <label class="custom-control-label" for="f3">8 x 16 cm</label>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <form action="">
                            <div class="form_field">
                                <label for="">Product Description</label>
                                <input type="text">
                            </div>
                            <div class="form_field">
                                <label for="">Shiping Modal</label>
                                <input type="text">
                            </div>
                            <div class="form_field">
                                <label for="">Height(cm)</label>
                                <input type="text">
                            </div>
                            <div class="dropdown form_field check_right">
                                <label for="">Colors</label>
                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    #000000
                                    <img src="assets/images/arrow_down.svg" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="cf1">
                                            <label class="custom-control-label" for="cf1">
                                                color1
                                            </label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="cf2">
                                            <label class="custom-control-label" for="cf2">color2</label>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input dd_check_option" id="cf3">
                                            <label class="custom-control-label" for="cf3">color3</label>
                                        </div>
                                    </a>
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