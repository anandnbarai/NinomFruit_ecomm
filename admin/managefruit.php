<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Fruit Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>admindashboard">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo $mainurl; ?>addfruit">Add Fruit Details</a>
                </li>
                <li class="breadcrumb-item active">Manage Fruit Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Fruit Details</h5>
                        <!-- Horizontal Form -->
                        <table class="table datatable text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Fruit Name</th>
                                    <th scope="col">Fruit Image</th>
                                    <th scope="col">Fruit Description</th>
                                    <th scope="col">Fruit Price/kg</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($fruit as $row) {
                                    ?>
                                    <tr>

                                        <td>
                                            <?php echo $row["fruit_id"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["f_name"]; ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo $row["f_image"]; ?>" alt="Fruit"
                                                style="width:200px; height:100px; object-fit: contain;">
                                        </td>
                                        <td>
                                            <?php echo $row["f_description"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["f_price"]; ?>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary text-white"><span
                                                    class="bi bi-pencil"></span></a> |
                                            <a href="" class="btn btn-sm btn-danger text-white"><span
                                                    class="bi bi-trash"></span></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->