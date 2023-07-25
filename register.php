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
                                    Name : <input type="text" placeholder="Full Name" name="name" required/>
                                </div>
                                <div>
                                    Email : <input type="email" placeholder="Email" name="email" required/>
                                </div>
                                <div>
                                    Phone Number : <input type="text" placeholder="Phone Number" name="mobile" required/>
                                </div>
                                <div>
                                    Address : <input type="text" class="message_input" placeholder="Enter Your Address"
                                        name="address" required/>
                                </div>
                                <div>
                                    Password : <input type="password" placeholder="Enter Your Password" minlength="6"
                                        name="password" required/>
                                </div>
                                <div>
                                    Confirm Password : <input type="password" placeholder="Enter Your Password Again"
                                        name="c_password" minlength="6" required/>
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