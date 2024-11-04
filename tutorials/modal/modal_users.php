
<!-- Modal -->
<div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="usermodalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="usermodalLabel">Add New User</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                <form  action = "http://localhost/app/tutorials/users/add_user.php" method ="POST" >

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3 col-md-3">
                            <span class="input-group-text">Username:</span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username"
                            >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Email Address:</span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address"
                            >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">First Name:</span>
                        </div>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your first name"
                            >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Middle Name:</span>
                        </div>
                        <input type="text" name="middlename" class="form-control"
                            placeholder="Enter your middle name (optional)">
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Last Name:</span>
                        </div>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your last name"
                            >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Birthday:</span>
                        </div>
                        <input type="date" name="birthday" class="form-control" >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Address:</span>
                        </div>
                        <input type="text" name="address" class="form-control" placeholder="Enter your full address"
                            >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Mobile:</span>
                        </div>
                        <input type="text" name="mobile" class="form-control" placeholder="09XXXXXXXXXX" >
                    </div>

                    <div class="form-group input-group mb-3">
                        <div class="input-group-prepend  col-md-3">
                            <span class="input-group-text">Role:</span>
                        </div>
                        <select name="role" class="form-control" >
                        <?php include('../list/list_roles.php'); ?>
                        </select>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>