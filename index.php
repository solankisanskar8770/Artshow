<?php include("./header.php"); ?>
<main>
    <div class="admin_page dashboard">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Dashboard
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="three_box">
                <div class="box_single">
                    <div class="box_img">
                        <img src="assets/images/total_user_icon.svg" alt="">
                    </div>
                    <div class="box_inner">
                        <h2 class="value">5,524</h2>
                        <h6>total user</h6>
                    </div>
                </div>
                <div class="box_single bs_2">
                    <div class="box_img">
                        <img src="assets/images/total_product_icon.svg" alt="">
                    </div>
                    <div class="box_inner">
                        <h2 class="value">5,524</h2>
                        <h6>total product</h6>
                    </div>
                </div>
                <div class="box_single">
                    <div class="box_img">
                        <img src="assets/images/total_order_icon.svg" alt="">
                    </div>
                    <div class="box_inner">
                        <h2 class="value">5,524</h2>
                        <h6>total order</h6>
                    </div>
                </div>
            </div>
            <div class="page_inner">
                <div class="info_table user_list">
                    <div class="i_table_head">
                        <div class="it_title">
                            <h4>User List</h4>
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
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th class="width_1">Users</th>
                                        <th class="width_1">Email</th>
                                        <th class="width_1">Address</th>
                                        <th class="width_1">Status</th>
                                        <th class="width_1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="status"><span class="active">active</span></td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Rayan Artecona</h6>
                                        </td>
                                        <td class="u_email">trungkien@gamail.com</td>
                                        <td class="u_address">84547 Lyons Center</td>
                                        <td class="status"><span class="inactive">inactive</span></td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Mark Chen</h6>
                                        </td>
                                        <td class="u_email">thuhang.@gmail.com</td>
                                        <td class="u_address">59797 Elka Trail</td>
                                        <td class="status"><span class="active">active</span></td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Rayan Artecona</h6>
                                        </td>
                                        <td class="u_email">tranthuy@gmail.com</td>
                                        <td class="u_address">84 Vernon Court</td>
                                        <td class="status"><span class="inactive">inactive</span></td>
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Mark Chen</h6>
                                        </td>
                                        <td class="u_email">tienlaps@gmail.com</td>
                                        <td class="u_address">01 Chive Circle</td>
                                        <td class="status"><span class="active">active</span></td>
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
                <div class="info_table Category">
                    <div class="i_table_head">
                        <div class="it_title">
                            <h4>Category List</h4>
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
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th class="widht_2">Category Name</th>
                                        <th class="widht_2">Image</th>
                                        <th class="widht_2">Status</th>
                                        <th class="widht_2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class=" cat_name">John Kristen</td>
                                        <td class=" cat_img"><img src="assets/images/user_img.jpg" alt=""></td>
                                        <td class="status "><span class="inactive">inactive</span></td>
                                       
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class=" cat_name">Rayan Artecona</td>
                                        <td class=" cat_img"><img src="assets/images/user_img.jpg" alt=""></td>
                                        <td class="status "><span class="active">active</span></td>
                                       
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td class=" cat_name">Mark Chen</td>
                                        <td class=" cat_img"><img src="assets/images/user_img.jpg" alt=""></td>
                                        <td class="status "><span class="inactive">inactive</span></td>
                                       
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td class=" cat_name">Rayan Artecona</td>
                                        <td class=" cat_img"><img src="assets/images/user_img.jpg" alt=""></td>
                                        <td class="status "><span class="active">active</span></td>
                                     
                                        <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td class=" cat_name">John Kristen</td>
                                        <td class=" cat_img"><img src="assets/images/user_img.jpg" alt=""></td>
                                        <td class="status "><span class="active">active</span></td>                                        
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