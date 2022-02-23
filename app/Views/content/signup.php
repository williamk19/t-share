<div class="container-md pt-5">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
      <div class="wrap">
        <div class="img" style="background-image:url(images/xbg-1.jpg.pagespeed.ic.EtoN2PmO7Y.webp)"></div>
        <div class="login-wrap p-4 p-md-5">
          <div class="d-flex">
            <div class="w-100">
              <h3 class="mb-4">Sign Up</h3>
            </div>
            <div class="w-100">
              <p class="social-media d-flex justify-content-end">
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
              </p>
            </div>
          </div>
          <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
          <?php endif; ?>
          <form action="/register/save" method="POST" class="signin-form">
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="name" required="">
              <label class="form-control-placeholder" for="name">Nama Lengkap</label>
            </div>
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" required="">
              <label class="form-control-placeholder" for="email">Email</label>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="prodi" required="">
              <label class="form-control-placeholder" for="prodi">Program Studi</label>
            </div>
            <div class="form-group mt-3">
              <input id="password-field" type="password" name="password" class="form-control" required="">
              <label class="form-control-placeholder" for="password">Password</label>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3 mt-3">Daftar</button>
            </div>
          </form>
          <p class="text-center mt-4">Sudah Punya Akun? <a data-toggle="tab" href="/signin">Sign In</a></p>
        </div>
      </div>
    </div>
  </div>
</div>