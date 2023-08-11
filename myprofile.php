<section class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="offset-lg-2 col-md-10 offset-md-1">
            <div class="heading_container">
                <hr>
                <h2>
                    <strong>
                        <?php echo ucfirst($_SESSION["name"]); ?>,
                    </strong>
                    Welcome to Your Profile
                </h2>
            </div>
        </div>
        <div class="layout_padding2-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 bg-white h-50 p-5 fs-5 mt-5 contact_form-container">
                        <div class="heading_container">
                            <hr>
                            <h2>
                                Profile Option
                            </h2>
                        </div>
                        <ul style="list-style-type: none">
                            <li class=" nav-item">
                                <a class="nav-link text-dark" href="<?php echo $mainurl; ?>myprofile">
                                    <i class="bi bi-pencil-square"></i> Manage Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $mainurl; ?>myorders">
                                    <i class="bi bi-handbag"></i> Manage Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $mainurl; ?>changepassword">
                                    <i class="bi bi-file-earmark-lock"></i> Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $mainurl; ?>forgotpassword">
                                <i class="bi bi-lock"></i> Forgot Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo $mainurl; ?>deleteaccount"><i
                                        class="bi bi-person-fill-x"></i> Delete
                                    Account </a>
                            </li>
                            <div>
                                <button type="submit" name="logout">
                                    <a class="text-dark text-decoration-none" href="<?php echo $mainurl ?>?logout">Log
                                        Out</a>
                                </button>
                            </div>
                        </ul>
                    </div>
                    <div class=" col-lg-7 ms-0">
                        <form method="post">
                            <div class="contact_form-container">
                                <div>
                                    <div>
                                        Name : <input type="text" name="name"
                                            value="<?php echo $showdata[0]['name'] ?>" />
                                    </div>
                                    <div>
                                        Email : <input type="email" name="email"
                                            value="<?php echo $showdata[0]['email'] ?>" />
                                    </div>
                                    <div>
                                        Phone Number : <input type="text" name="mobile"
                                            value="<?php echo $showdata[0]['mobile'] ?>" />
                                    </div>
                                    <div>
                                        Address : <input type="text" class="message_input" name="address"
                                            value="<?php echo $showdata[0]['address'] ?>" />
                                    </div>
                                    <div>
                                        <button type="submit" class="text-dark" name="update">
                                            Edit Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>