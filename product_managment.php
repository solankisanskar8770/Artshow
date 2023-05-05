<?php include("./header.php"); ?>
<main>
    <div class="admin_page prod_managment">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Product Managment
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="info_table prod_manag_table">
                    <div class="i_table_head table_head2">
                        <div class="it_title">
                            <div class="show_entry">
                                <h4>Show</h4>
                                <div class="sort_entry">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            5
                                            <img src="assets/images/arrow_down.svg" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">10</a>
                                            <a class="dropdown-item" href="#">20</a>
                                            <a class="dropdown-item" href="#">30</a>
                                            <a class="dropdown-item" href="#">40</a>
                                            <a class="dropdown-item" href="#">50</a>
                                        </div>
                                    </div>
                                </div>
                                <h4>Entries</h4>
                            </div>
                        </div>
                        <div class="ssf">
                            <div class="search_bar ssf_single">
                                <input type="search" placeholder="Search">
                                <img src="assets/images/Search.svg" alt="">
                            </div>
                            <div class="sort ssf_single">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort By
                                        <img src="assets/images/arrow_down.svg" alt="">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="filter ssf_single">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/images/funnel.svg" alt="">
                                        Filter

                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add_new_btn">
                            <a href="./add_product_managment.php">Add New</a>
                        </div>
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th class="width_4">Short Code</th>
                                        <th class="width_4">category</th>
                                        <th class="width_4">Product Type</th>
                                        <th class="width_4">Product Description</th>
                                        <th class="width_4">Sizing Units</th>
                                        <th class="width_4">Width(in)</th>
                                        <th class="width_4">Height(in)</th>
                                        <th class="width_4">Output Format</th>
                                        <th class="width_4">Colour</th>
                                        <th class="width_4">Currency</th>
                                        <th class="width_4">Artshow(Y/N)</th>
                                        <th class="width_4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>    <tr>
                                        <th>6</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>    <tr>
                                        <th>7</th>
                                        <td>6LFLW3</td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Printed</h6>
                                        </td>
                                        <td class="prod_type">Classic Framed</td>
                                        <td class="prod_desc">Classic Frame</td>
                                        <td class="size_unit">inch</td>
                                        <td class="w_in">12</td>
                                        <td class="h_in">12</td>
                                        <td class="Out_format">jpeg</td>
                                        <td class="color">Black</td>
                                        <td class="currency">USD</td>
                                        <td class="yes_no">y</td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php include("./footer.php"); ?>