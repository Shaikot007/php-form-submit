<?php include "./includes/header.php"; ?>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="card">
            <div class="card-header">
              <h3>Please fill the all information</h3>
            </div>
            <div class="card-body">
              <?php if(isset($message)) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php echo $message; ?></strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php } ?>
              <form action="action.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="name" class="col-form-label col-md-3">
                    Product name
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your product name" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="price" class="col-form-label col-md-3">
                    Product price
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="price" id="price" class="form-control" placeholder="Enter your product price" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="amount" class="col-form-label col-md-3">
                    Stock amount
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter your stock amount" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="category" class="col-form-label col-md-3">
                    Category name
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="category" id="category" class="form-control" placeholder="Enter your category name" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="brand" class="col-form-label col-md-3">
                    Brand name
                  </label>
                  <div class="col-md-9">
                    <input type="text" name="brand" id="brand" class="form-control" placeholder="Enter your brand name" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="image" class="col-form-label col-md-3">
                    Product image
                  </label>
                  <div class="col-md-9">
                    <input type="file" name="image" id="image" class="form-control-file" required />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3">
                  </label>
                  <div class="col-md-9">
                    <input type="submit" name="button" value="Save info" class="btn btn-outline-success btn-block" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "./includes/footer.php"; ?>
