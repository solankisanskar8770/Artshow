<?php include("./header.php"); ?>
<main>
    <div class="admin_page u_managment">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>user managment
                   <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a> 
                </h1>
            </div>
            <div class="page_inner">
                <div class="info_table u_mang_table">
                    <div class="i_table_head">
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
                    </div>
                    <div class="table_inner">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th class="width_3">First Name</th>
                                        <th class="width_3">Last Name</th>
                                        <th class="width_3">Email</th>
                                        <th class="width_3">Address</th>
                                        <th class="width_3">Email Verify</th>
                                        <th class="width_3">Status</th>
                                        <th class="width_3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                        Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches1">
                                                <label class="custom-control-label" for="customSwitches1"></label>
                                            </div>
                                        </td>
                                        <td class="status"><span class="active">active</span></td>
                                        <td class="action">
                                            <a href="./view_user_managment.php"><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href="./edit_user_managment.php"><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                        Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches2">
                                                <label class="custom-control-label" for="customSwitches2"></label>
                                            </div>
                                        </td>
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
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                            Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches3">
                                                <label class="custom-control-label" for="customSwitches3"></label>
                                            </div>
                                        </td>
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
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                            Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches4">
                                                <label class="custom-control-label" for="customSwitches4"></label>
                                            </div>
                                        </td>
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
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                            Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches5">
                                                <label class="custom-control-label" for="customSwitches5"></label>
                                            </div>
                                        </td>
                                        <td class="status"><span class="active">active</span></td>
                                          <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                            Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches6">
                                                <label class="custom-control-label" for="customSwitches6"></label>
                                            </div>
                                        </td>
                                        <td class="status"><span class="inactive">inactive</span></td>
                                          <td class="action">
                                            <a href=""><img src="assets/images/view_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td class="u_img_name">
                                            <h6><img src="assets/images/user_img.jpg" alt=""> John kristen
                                            </h6>
                                        </td>
                                        <td class="last_name">
                                            Ruez
                                        </td>
                                        <td class="u_email">vuhaithuo@gmail.com</td>
                                        <td class="u_address">9 Evergreen Center</td>
                                        <td class="email_verify">
                                            <!-- Default switch -->
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches7">
                                                <label class="custom-control-label" for="customSwitches7"></label>
                                            </div>
                                        </td>
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
            </div>
        </div>
    </div>
</main>
<?php include("./footer.php"); ?>