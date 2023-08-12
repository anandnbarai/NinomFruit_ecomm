<section class="fruit_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <hr>
            <h2>
                Fresh Fruit
            </h2>
        </div>
    </div>
    <div class="container-fluid">

        <div class="fruit_container">
            <?php
            foreach ($fruit as $row) {
                ?>
                <div class="box">
                    <img src="uploads/<?php echo $row["f_image"]; ?>" alt="">
                    <div class="link_box">
                        <h5>
                            <?php echo $row["f_name"]; ?>
                        </h5>
                        <h5>
                            
                            Price : &#8377;<?php echo $row["f_price"]; ?>/kg
                        </h5>
                        <a href="<?php echo $mainurl; ?>cart">
                            Add to Cart
                        </a>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
</section>
<!-- <script>
    function login() {
        alert('Login First to buy the Fruit')
        window.location = 'login';
    }
</script> -->