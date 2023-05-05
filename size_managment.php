<?php include("./header.php"); ?>
<main>
    <div class="admin_page prod_managment">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Size Management
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="info_table fc_manag_table">
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
                            <a href="./add_size_managment.php">Add New</a>
                        </div>
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th class="widht_4">Category</th>
                                        <th class="widht_4">Title</th>
                                        <th class="widht_4">Title 2</th>
                                        <th class="widht_4">Size Types</th>
                                        <th class="widht_4">Image</th>
                                        <th class="widht_4">Price</th>
                                        <th class="widht_4">No. of Image</th>
                                        <th class="widht_4">Frames</th>
                                        <th class="widht_4">Colors</th>
                                        <th class="widht_4">Description</th>
                                        <th class="widht_4">Status</th>
                                        <th class="a_center widht_4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>8</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>9</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>10</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="inactive">inactive</span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>11</th>
                                        <td>Prints</td>
                                        <td>6x8 Framed Art Print</td>
                                        <td>Jersey T-Shirt</td>
                                        <td>6x8, 15x20 cm, 6”x8”</td>
                                        <td class="cat_img">
                                            <img src="assets/images/user_img.jpg" alt="">
                                        </td>
                                        <td>$24</td>
                                        <td>24</td>
                                        <td>6,8,9,5</td>
                                        <td class="u_img_name hex_code">
                                            <img src="assets/images/black_color.png" alt="">
                                            #303030
                                        </td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="status">
                                            <span class="active">active</span>
                                        </td>
                                        <td class="action a_center">
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