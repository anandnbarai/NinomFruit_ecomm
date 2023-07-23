<section class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-md-10 offset-md-1">
                <div class="heading_container">
                    <hr>
                    <h2>
                        Register Here!
                    </h2>
                </div>
            </div>
        </div>
        <div class="layout_padding2-top">
            <div class="row">
                <div class="col-lg-5 offset-lg-2 offset-md-1">
                    <form method="post">
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    Name : <input type="text" placeholder="Full Name" name="name" />
                                </div>
                                <div>
                                    Email : <input type="email" placeholder="Email" name="email" />
                                </div>
                                <div>
                                    Phone Number : <input type="text" placeholder="Phone Number" name="mobile" />
                                </div>
                                <div>
                                    Address : <input type="text" class="message_input" placeholder="Enter Your Address"
                                        name="address" />
                                </div>
                                <div>
                                    Password : <input type="password" placeholder="Enter Your Password"
                                        name="password" />
                                </div>
                                <div>
                                    Confirm Password : <input type="password" placeholder="Enter Your Password Again"
                                        name="c_password" />
                                </div>
                                <div>
                                    <button type="submit" class="text-dark" name="register">
                                        Creat An Account
                                    </button>
                                </div>
                                <div>
                                    Already have an Account? <a href="<?php echo $mainurl; ?>login">Login Here!</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>