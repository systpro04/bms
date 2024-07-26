<!-- Page -->
<div class="error-page1 bg-light">
    <div class="page">
        <div class="container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div
                    class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent"
                >
                    <div class="row wd-100p mx-auto text-center">
                        <div
                            class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p"
                        >
                            <img
                                src="<?php echo base_url();?>assets/img/media/login.png"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto"
                                alt="logo"
                            />
                        </div>
                    </div>
                </div>
                <!-- The content half -->
                <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                    <div class="login d-flex align-items-center py-2">
                        <!-- Demo content-->
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                    <div class="card-sigin">
                                        <div class="mb-5 d-flex">
                                            <a href="index.html"
                                                ><img
                                                    src="<?php echo base_url();?>assets/img/brand/favicon.png"
                                                    class="sign-favicon ht-40"
                                                    alt="logo"
                                            /></a>
                                            <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">
                                                Login
                                            </h1>
                                        </div>
                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h2>Welcome back!</h2>
                                                <h5 class="font-weight-semibold mb-4">
                                                    Please sign in to continue.
                                                </h5>
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="form-control" placeholder="Enter your username" type="text"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password </label>
                                                        <input class="form-control" placeholder="Enter your password" type="password"/>
                                                    </div>
                                                    <a class="btn btn-main-primary btn-block" href="<?php echo base_url();?>Dashboard/index">Sign In</a>
                                                </form>
                                                <div class="main-signin-footer mt-3">
                                                    <p><a href="signin.html">Forgot password? </a></p>
                                                    <p> Don't have an account?
                                                        <a href="<?php echo base_url();?>Auth/Signup/index" >Create an Account</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </div>
</div>
<!-- End Page -->