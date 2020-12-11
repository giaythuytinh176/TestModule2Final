<?php require_once "./src/views/pages/blocks/header.php"; ?>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo '<div class="alert alert-success" role="alert"> Added Product. </div>';
                $this->redirectAfterSecondPage("", 1);
            } else {
                ?>
                <div class="row">
                    <h3>
                        <div class="col-lg-12 col-md-12">Add New Product:
                        </div>
                    </h3>
                    <div class="col-lg-12 col-md-12">
                        <form method="post">

                            <div class="form-group row">
                                <label for="ProductName" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ProductName" id="ProductName"
                                           placeholder="Product Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ProductType" class="col-sm-2 col-form-label">Product Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="ProductType" id="ProductType" required>
                                        <option value="Điện thoại">Điện thoại</option>
                                        <option value="Tủ lạnh">Tủ lạnh</option>
                                        <option value="Máy giặt">Máy giặt</option>
                                        <option value="Điều hoà">Điều hoà</option>
                                        <option value="Tivi">Tivi</option>
                                        <option value="Máy tính">Máy tính</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="Price" id="Price"
                                           placeholder="Price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Quantity" class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="Quantity" id="Quantity"
                                           placeholder="Quantity" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Created" class="col-sm-2 col-form-label">Created</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="Created" id="Created" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" rows="10" class="form-control" name="Description"
                                              id="Description" placeholder="Description" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="d-flex justify-content-center col-sm-10">
                                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div><!-- #shop end -->
                </div>
            <?php } ?>
        </div>
    </div>
</section><!-- #content end -->

<?php require_once "./src/views/pages/blocks/footer.php"; ?>
