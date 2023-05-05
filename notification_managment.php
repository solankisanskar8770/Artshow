<?php include("./header.php"); ?>
<main>
    <div class="admin_page notification_manag">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Notification Management
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
                            <a href="" data-toggle="modal" data-target="#an_notification">Add New</a>
                        </div>
                        <div class="modal fade" id="an_notification">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <h5>Add Notification</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal_banner_img">
                                            <label for="">Notification Banner</label>
                                            <img src="assets/images/banner_img1.jfif" alt="">
                                        </div>
                                        <form action="">
                                            <div class="form_field">
                                                <label for="">Title</label>
                                                <input type="text">
                                            </div>
                                            <div class="form_field">
                                                <label for="">Send To</label>
                                                <input type="text">
                                            </div>
                                            <div class="form_field">
                                                <label for="">Description</label>
                                                <textarea name="" id="" rows="5"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer border-top-0">
                                        <div class="cancel_btn">
                                            <span class="close" data-dismiss="modal" aria-label="Close">Cancel</span>
                                        </div>
                                        <div class="submit_btn">
                                            <button type="submit">Save</button>
                                        </div>
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
                                        <th class="widht_5">Title</th>
                                        <th class="widht_5">Description</th>
                                        <th class="widht_5">Image</th>
                                        <th class="widht_5">Target</th>
                                        <th class="widht_5">Status</th>
                                        <th class="a_center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="active">
                                                active
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>                                           
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="active">
                                                active
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="inactive">
                                                inactive
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="active">
                                                active
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="inactive">
                                                inactive
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="active">
                                                active
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="inactive">
                                                inactive
                                            </span>
                                        </td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>8</th>
                                        <td>Auction Status - Bid Losing</td>
                                        <td class="prod_desc">lorem ipsum</td>
                                        <td class="cat_img">
                                            <img src="assets/images/banner_bg.svg" alt="">
                                        </td>
                                        <td>Customer</td>
                                        <td class="status">
                                            <span class="active">
                                                active
                                            </span>
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