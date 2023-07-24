<section class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-md-10 offset-md-1">
                <div class="heading_container">
                    <hr>
                    <h2 class="mb-4 text-dark">Delete Account</h2>
                </div>
            </div>
        </div>

        <div class="layout_padding2-top">
            <div class="row">
                <div class="col-lg-10 text-justify offset-lg-2 col-md-5 offset-md-1">
                    <form method="post">
                        <div class="contact_form-container">
                            <div>
                                <h5 class="mb-3 text-dark" align="justify"> Give us one more chance to Serve you by not
                                    deleting your
                                    account <br>
                                    <a href="<?php echo $mainurl; ?>/fruit" class='text-dark'>Explore
                                        Products</a><br><br>If you are no
                                    longer interested in using our service, you can delete your account.<br>Once you
                                    delete your account, you will not be able to recover your data.
                                </h5>
                                <div>
                                    <button type="submit" name="deleteaccount">
                                        <a class="text-dark text-decoration-none" href="<?php echo $mainurl ?>?deleteaccount=<?php echo $_SESSION['user_id']; ?>"
                                        onclick="return confirm('Are You Sure?')">Delete Account</a>
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>