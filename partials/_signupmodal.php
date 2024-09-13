<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h1 class="modal-title fs-5 text-center" id="signupmodal">SIGNUP</h1>
                <button type="button" class=" btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mb-3 p-5">
                <form action="../../partials/_handlesignup.php" method="post">
                    <div class="row mb-3">
                        <div class="form-floating ps-2 col">

                            <input type="text" class="form-control" id="p_name" name="p_name">
                            <label for="p_name" class="form-label">Name</label>
                        </div>
                        <div class=" form-floating ps-2 col">

                            <input type="p_email" class="form-control" id="p_email" name="p_email">
                            <label for=" p_email" class="form-label">E-mail</label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-floating ps-2 col">

                            <input type="p_pass" class="form-control ps-3" id="p_pass" name="p_pass" ">
                            <label for=" p_pass" class="form-label ps-3">Password</label>
                        </div>
                        <div class="form-floating ps-2 col">

                            <input type="p_conpass" class="form-control ps-2" for="p_conpass" name="p_conpass" maxlength="15">
                            <label for="p_conpass" class="form-label">Confirm Password</label>

                        </div>
                        <div id="p_conpass" class="form-text">Please make sure you type the same password</div>
                    </div>
                    <div class="form-floating mb-3 col ">
                        <textarea class="form-control" name="p_address" id="p_address"></textarea>
                        <label for="p_address">Address</label>
                    </div>
                    <div class="row mb-3">
                        <div class="form-floating ps-2 col">

                            <input type="p_phone" class="form-control" id="p_phone" name="p_phone">
                            <label for="p_phone" class="form-label">Phone</label>
                        </div>
                        <div class="form-floating ps-2 col">

                            <input id="p_dob" name="p_dob" class="form-control  " type="date">
                            <label for="p_dob" class="form-label"> Date of Birth (D-M-Y)</label>
                        </div>
                    </div>
                    <button type="submit" style="float:right;" class="btn btn-danger col-3">Sign in</button>
                </form>
                <div class="row ">

                    <p class="col m-0">Already Registered? <button data-bs-target="#loginmodal" data-bs-toggle="modal" class="btn btn-outline-danger  btn-sm">Log in</button> here!</p>

                </div>


            </div>

        </div>
    </div>
</div>