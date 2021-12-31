<?php include "./includes/header.php"; ?>

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="card">
            <div class="card-header">
              <h3>All products info go here</h3>
            </div>
            <div class="card-body">
              <table class="table table-hover text-center">
                <thread>
                  <tr>
                    <th scope="col">Product name</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Stock amount</th>
                    <th scope="col">Product category</th>
                    <th scope="col">Brand name</th>
                    <th scope="col">Image</th>
                  </tr>
                </thread>
                <tbody>
                  <?php if(isset($products)) { foreach($products as $product) { ?>
                    <tr>
                      <td><?php echo $product["name"]; ?></td>
                      <td><?php echo $product["price"]; ?></td>
                      <td><?php echo $product["amount"]; ?></td>
                      <td><?php echo $product["category"]; ?></td>
                      <td><?php echo $product["brand"]; ?></td>
                      <td><img src="<?php echo $product["image"]; ?>" alt="Image" height="80" width="120" /></td>
                    </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "./includes/footer.php"; ?>
