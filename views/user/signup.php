
<!-- Reutilizacion del header here  -->
<?php require "views/layouts/header.php" ?>

<div class=" container-expande mt-5 p-5 row m-auto"> 

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8 ">
        <div class="card bg-dark p4 text-white">
          <div class="card-header">Sign Up</div>
          <div class="card-body">

            <!-- <?php if ($error) : ?>
              <p class="text-danger">
                <?= $error ?>
              </p>
            <?php endif ?> --> 

            <!-- Form to send the data to the controller. -->
            <form method="post" action="../../controllers/post.controller.php ">
              <div class="mb-3 row">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="user_name" autocomplete="name" placeholder="Name" autofocus require>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                <div div class="col-md-6">
                  <input type="email" id="email" class="form-control" name="email_user" autocomplete="email" placeholder="Email" require>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                <div div class="col-md-6">
                  <input type="password" id="password" class="form-control" name="password_user" autocomplete="password" placeholder="Password" require>
                </div>
              </div>

              <div class="mb-3 row">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<?php require "views/layouts/footer.php" ?>


