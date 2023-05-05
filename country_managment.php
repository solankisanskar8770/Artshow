<?php include("./header.php"); ?>
<main>
    <div class="admin_page prod_managment">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1>Country Managment
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="info_table count_manag_table">
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
                            <a href="" data-toggle="modal" data-target="#an_country">Add New</a>
                        </div>
                        <div class="modal fade" id="an_country">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                        <h5>Create Account</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cou_img">
                                            <img src="assets/images/flag_sa.png" alt="">
                                        </div>
                                        <form action="">
                                            <div class="form_field">
                                                <label for="">Country Name</label>
                                                <input type="text">
                                                
                                            </div>
                                            <div class="form_field">
                                                <label for="">Country Code</label>
                                                <input type="number">
                                                
                                            </div>
                                            <div class="form_field">
                                                <label for="">Lab Alias</label>
                                                <input type="text">
                                                
                                            </div>
                                        </form>


                                    </div>
                                    <div class="modal-footer border-top-0">
                                        <div class="cancel_btn">
                                       
                                            
                                                <span  class="close" data-dismiss="modal" aria-label="Close">Cancel</span>
                                     
                                        </div>
                                        <div class="submit_btn">
                                            <button type="submit">Submit</button>
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
                                        <th>Sl</th>
                                        <th class="widht_2">Country Code</th>
                                        <th class="widht_2">Country Name</th>
                                        <th class="widht_2">Lab Alias</th>
                                        <th class="widht_2 a_center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>7</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>8</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>9</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
                                        <td class="action a_center">
                                            <a href=""><img src="assets/images/edit_icon.svg" alt=""></a>
                                            <a href=""><img src="assets/images/delete_icon.svg" alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>10</th>
                                        <td class="country_code">27</td>
                                        <td class="u_img_name country_name">
                                            <h6>
                                                <img src="assets/images/flag_sa.png" alt="">
                                                South Africa
                                            </h6>
                                        </td>
                                        <td class="lab_alias">us1</td>
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