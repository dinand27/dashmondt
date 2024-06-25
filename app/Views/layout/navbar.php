 <!-- bagian navbar -->
 <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?php echo base_url('/') ?>" >
                <img src="<?php echo base_url() ?>/assets/img/logosam_white.png" width="30" height="30" class="d-inline-block align-top" alt="">
                PT.SAM
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarNav"  ><a href="<?php echo base_url('login') ?>">Login</a>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url('login') ?>">Sign In </a> 
                </li>

              </ul>
            </div>
          </nav>
    </div>    <!--end bagian navbar -->