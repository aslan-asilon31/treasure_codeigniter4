<?= $this->extend('layouts/frontend') ?>

<?= $this->section('content') ?>

 <!-- Main Content -->
 <main class="main-content flex-grow-1">
         <!-- Start Form Block -->
         <section class="form-block">
          <div class="container-xxl">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="form-outer">
                  <!-- Start Form Heading -->
                  <!-- Start Form Heading -->
                  <div class="form-heading bg-primary text-white text-center">
                    <h5 class="mb-3">Sign in</h5>
                    <ul class="sign-in-using-list d-flex justify-content-center" >
                      <li>
                        <a href="#" title="Facebook">
                          <img src="assets/img/ic-facebook-w.svg" alt="Facebook" style="color:white"/>
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Github">
                          <img src="assets/img/ic-github.svg" alt="Github" style="color:white" />
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Google">
                          <img src="assets/img/ic-google.svg" alt="Google" style="color:white" />
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- Emd Form Heading -->

                  <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>

                  <form class="" action="<?= base_url('login') ?>" method="post">
                    <div class="mb-4">
                    <input type="email" class="form-control" name="email" id="email">
                    </div>  
                    <div class="mb-4">
                    <input type="password" class="form-control" name="password" id="password">
                    </div>  

                    <div class="form-check form-switch mb-4">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                    </div>

                    <div class="mb-4">
                        <button class="btn btn-primary w-100">Sign In</button>
                    </div>  
                    <div class="text-center mb-4">
                        <a href="sign-up.html" class="sign-up-btn">Don't have an account?</a>
                    </div>
                   </form>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Form Block -->
      </main>
      <!-- End Main Content -->

<?= $this->endSection() ?>

