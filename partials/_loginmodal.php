<!-- Modal -->
<div class="modal fade " id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h1 class="modal-title fs-5 text-center" id="loginmodal">LOGIN </h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  ">
                <form action="../../partials/_handlelogin.php" method="post" class="d-flex flex-column align-items-center my-3">
                    <div class=" form-floating mb-3  col-8">

                        <input type="email" class="form-control" id="u_email" name="u_email">
                        <label for=" u_email" class="form-label" placeholder="Enter your Email">E-mail</label>
                    </div>
                    <div class="form-floating mb-3 col-8">

                        <input type="password" class="form-control" id="u_pass" name="u_pass">
                        <label for="u_pass" class="form-label" placeholder="Enter your Password">Password</label>
                    </div>

                    <div class="d-flex align-content-center align-self-start justify-content-between mb-2">
                        <div class="form-check align-self-start  col-8 mb-3" style="margin-left: 80px;">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Remember me
                            </label>

                        </div>
                        <button type="submit" class="btn btn-danger  col-5">Log in</button>
                    </div>



                </form>
                <p class="d-flex  align-self-start justify-content-center mb-4">Do not have an account? <button data-bs-target="#signupmodal" data-bs-toggle="modal" class="btn btn-outline-danger btn-sm mx-2">Sign up</button> now!</p>

            </div>

        </div>
    </div>
</div>