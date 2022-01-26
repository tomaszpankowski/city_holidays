<section class="login-s1 container-fluid d-flex align-items-center bg-secondary py-5 minh-100vh">
    <div class="row mx-0 w-100 pt-5 mt-5">
        <div class="col-11 col-sm-8 col-md-6 col-lg-4 col-xxl-3 mx-auto">
            <div class="card shadow bg-dark opacity-9 border-info">
                <div class="card-header border-bottom border-info">
                    <h6 class="text-info text-uppercase my-1">
                        Login
                    </h6>
                </div>
                <div class="card-body">
                    <form class="text-start px-3" 
                        autocomplete="off"
                        action=""
                        method="POST">
                        <div class="form-group mb-3">
                            <label class="text-white text-shadow mb-2 ms-1">Login</label>
                            <input class="form-control rounded-pill border-info bg-dark text-white" 
                                type="text" 
                                maxlength="80"
                                name="username"
                                placeholder="Full name"
                                tabindex="1"/>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-white text-shadow mb-2 ms-1">Password</label>
                            <input class="form-control rounded-pill border-info bg-dark text-white" 
                                type="password" 
                                maxlength="60"
                                name="userpass"
                                placeholder="Enter password"
                                tabindex="2"/>
                        </div>
                        <div class="w-100 small border-bottom border-info">
                            <p class="text-white text-shadow">
                                Not registered? Register
                                <a href="register.html" class="fw-bold text-decoration-none text-info">Now</a>
                            </p>
                        </div>
                        <div class="w-100 text-end py-3">
                            <input type="reset" 
                                class="btn btn-outline-info rounded-pill me-1" 
                                value="Clear"
                                tabindex="4"/>
                            <input type="submit" 
                                class="btn btn-outline-info rounded-pill" 
                                name="login"
                                value="Login"
                                tabindex="3"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>