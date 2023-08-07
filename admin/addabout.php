<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add About Section Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>admindashboard">Home</a></li>
                <li class="breadcrumb-item active">Add About Section Details</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add About Details</h5>
                        <!-- Horizontal Form -->
                        <form id="frm1" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">About Section Title</label>
                                <div class="col-sm-8">
                                    <input type="text" name="about_title" placeholder="About Section Title"
                                        class="form-control" id="inputText" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <input type="text" name="description" placeholder="About Section Description"
                                        class="form-control" id="inputEmail" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Description 1</label>
                                <div class="col-sm-8">
                                    <input type="text" name="description1" class="form-control"
                                        placeholder="About Section Description" id="inputEmail" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">About Image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="about_image" class="form-control" id="inputEmail" required>
                                </div>  
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="addabout">Add About Section</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
</main>
