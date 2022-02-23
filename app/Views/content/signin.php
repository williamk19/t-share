<div class="container-md pt-5">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-5">
      <div class="wrap">
        <div class="img" style="background-image:url(images/xbg-1.jpg.pagespeed.ic.EtoN2PmO7Y.webp)"></div>
        <div class="login-wrap p-4 p-md-5">
          <div class="d-flex">
            <div class="w-100">
              <h3 class="mb-4">Sign In</h3>
            </div>
            <div class="w-100">
              <p class="social-media d-flex justify-content-end">
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
              </p>
            </div>
          </div>
          <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
          <?php endif; ?>
          <form action="/login/auth" method="POST" class="signin-form">
            <div class="form-group mt-3">
              <input type="email" class="form-control" name="email" required="">
              <label class="form-control-placeholder" for="email">Email</label>
            </div>
            <div class="form-group mt-3">
              <input id="password-field" type="password" name="password" class="form-control" required="">
              <label class="form-control-placeholder" for="password">Password</label>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3 mt-3">Sign In</button>
            </div>
            <div class="form-group d-md-flex">
              <div class="w-50 text-left">
                <label class="checkbox-wrap checkbox-primary mb-0 mt-3">Ingat Saya
                  <input type="checkbox" checked="">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="w-50 text-md-right mt-3">
                <a href="#">Lupa Password</a>
              </div>
            </div>
          </form>
          <p class="text-center mt-4">Belum memiliki akun? <a data-toggle="tab" href="/register">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>
</div>