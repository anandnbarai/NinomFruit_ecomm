<section class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="img-box">
                    <img src="uploads/<?php echo $about[0]['image'] ?>" alt="About Image"">
                </div>
            </div>
            <div class="col-md-5">
                <div class="detail-box">
                    <div class="heading_container">
                        <hr>
                        <h2>
                            <?php echo $about[0]['title'] ?>
                        </h2>
                    </div>
                    <p align="justify">
                        <?php echo $about[0]['description'] ?>
                        <br><br>
                        <?php echo $about[0]['description1'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>