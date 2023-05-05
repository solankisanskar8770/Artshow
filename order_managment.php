<?php include("./header.php"); ?>
<main>
    <div class="admin_page order_manag">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Order Management
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
                            <a href="./order_detail.php">Add New</a>
                        </div>
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th class="width_7">Order ID</th>
                                        <th class="width_7">Product</th>
                                        <th class="width_7">category</th>
                                        <th class="width_7">Added Date</th>
                                        <th class="width_7">Price</th>
                                        <th class="width_7">Quantity</th>
                                        <th class="width_7">Status</th>
                                        <th class="width_7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="completed"> completed</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="pending"> pending</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="processing"> processing</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="onhold"> on hold</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="cancelled"> cancelled</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="refunded"> refunded</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td class="order_id"><a href="">275851</a></td>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt="">
                                                Art Print</h6>
                                        </td>
                                        <td>Prints</td>
                                        <td>28/10/2012</td>
                                        <td>$8.99</td>
                                        <td>110</td>
                                        <td class="status">
                                            <span class="failed"> failed</span>
                                            
                                        </td>
                                        <td class="action">
                                            <a href="./view_product_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_product_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
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