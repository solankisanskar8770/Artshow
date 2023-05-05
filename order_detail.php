<?php include("./header.php"); ?>
<main>
    <div class="admin_page order_detail">
        <?php include("./sidebar.php"); ?>
        <div class="page">
            <div class="page_head">
                <h1><img src="assets/images/back_arrow.svg" alt="" class="back_arrow">Order Detail
                    <a href="./profile_basic_information.php"><img src="assets/images/user_icon_blue.svg" alt=""></a>
                </h1>
            </div>
            <div class="page_inner">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="order_card_single">
                            <div class="ocs_header">
                                <h3 class="order_id">Order ID- <span>275851</span></h3>
                                <h6 class="date"><span>23 Mar 2022 , Tuesday</span></h6>
                                <h5 class="status">Status: <span class="comp">Completed</span></h5>
                                <h6>Creation: <span>My First Collage</span></h6>
                                <h5 class="status">Payment Status: <span class="comp">Paid</span></h5>
                            </div>
                            <div class="ocs_table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Item Details</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="item_detail">
                                                <div class="i_img">
                                                    <img src="./assets/images/banner_img1.jfif" alt="">
                                                </div>
                                                <div>
                                                    <h6>Art Print</h6>
                                                    <h6>Qty: <span>1</span></h6>
                                                </div>
                                            </td>
                                            <td>$<value>23.00</value></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ocs_footer">
                                <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <h6>Item Price: <span>$<value>23.00</value></span></h6>
                                    <h6 class="addon_cost">Addons Cost: <span>$<value>00.00</value></span></h6>
                                    <div class="totals">
                                        <h6>Subtotal: <span>$<value>23.00</value></span></h6>
                                        <h6>Discount: <span>$<value>00.00</value></span></h6>
                                        <h6>Delivery Cost: <span>$<value>10.00</value></span></h6>
                                        <h6>Total Cost: <span>$<value>33.00</value></span></h6>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="order_setup">
                            <div class="order_card_single">
                                <div class="ocs_header">
                                    <h6>Order Setup</h6>
                                    <div class="dropdown form_field">
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
                                    <div class="common_btn2">
                                        <a href="">Assign Delivery Man Manually</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order_card_single">
                            <div class="customer_information ">
                                <h6 class="title">Customer Information</h6>
                                <div class="ci_inner">
                                    <div class="ci_img">
                                        <img src="assets/images/user_img.jpg" alt="">
                                    </div>
                                    <div class="c_full_information">
                                        <h6 class="c_name">John Kristen</h6>
                                        <h6 class="order_no"><span>1</span> Order</h6>
                                        <h6 class="c_mobile"><img src="assets/images/phone.svg" alt=""><span>+7 8989748988</span></h6>
                                        <h6 class="c_gmail"><img src="assets/images/mail.svg" alt=""><span>example@gmail.com</span></h6>
                                    </div>
                                </div>
                                <div class="delivery_information">
                                    <h6 class="title">
                                    Delivery Information    
                                    </h6>
                                    <div class="di_inner">
                                        <h6>Name: <span>John Kristen</span></h6>
                                        <h6>Contact: <span> +7 8989748988</span></h6>
                                        <h6>Address: <span>27 Church Street, Wolverhampton, WV7 9KO</span></h6>
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