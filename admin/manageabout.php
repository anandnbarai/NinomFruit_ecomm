<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage About Section Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>admindashboard">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo $mainurl; ?>addabout">About Section Details</a>
                </li>
                <li class="breadcrumb-item active">Manage About Section Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage About Details</h5>
                        <!-- Horizontal Form -->
                        <form id="frm1" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">About Section Title</label>
                                <div class="col-sm-8">
                                    <input type="text" name="about_title" placeholder="About Section Title"
                                        class="form-control" id="inputText" value="<?php echo $about[0]['title'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <input type="text" name="description" placeholder="About Section Description"
                                        class="form-control" id="inputEmail"
                                        value="<?php echo $about[0]['description'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Description 1</label>
                                <div class="col-sm-8">
                                    <input type="text" name="description1" class="form-control"
                                        placeholder="About Section Description" id="inputEmail"
                                        value="<?php echo $about[0]['description'] ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">About Image</label>
                                <div class="col-sm-8 m-auto">
                                    <input type="file" name="about_image" class="form-control m-auto" id="inputEmail">
                                    <br>
                                    <img src="<?php echo $about[0]['image'] ?>" alt="About Image"
                                        style="width:160px; height:90px;">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="updateabout">Update About
                                    Section</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

</main><!-- End #main -->