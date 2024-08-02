<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Users</h4>
            <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index </span>
        </div>
    </div>
</div>
<hr>
<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">USERS TABLE</h4>
                    <a class="modal-effect btn btn-primary text-white" data-effect="effect-newspaper" data-toggle="modal" href="#create"><i class="fas fa-plus-circle"></i> New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="input-group2 mb-2">
                    <input type="text" class="form-control" placeholder="Lastname, Firstname, Middlename"/>
                    <span class="input-group-append"> 
                        <button class="btn ripple btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </span>
                </div>
                <div class="table-responsive userlist-table">
                    <table class="table table-vcenter text-nowrap mb-0" id="users">
                        <thead>
                            <tr>
                                <th class="wd-lg-8p"><span>Photo</span></th>
                                <th class="wd-lg-8p"><span>Name</span></th>
                                <th class="wd-lg-20p"><span>Username</span></th>
                                <th class="wd-lg-20p"><span>USER TYPE</span></th>
                                <th class="wd-lg-20p"><span>Created</span></th>
                                <th class="wd-lg-20p"><span>Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create -->
<div class="modal" id="create">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Edit User</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times; </span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="createForm">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  placeholder="Name" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">New Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password"  placeholder="Enter password"  required/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_type" class="col-sm-3 col-form-label">User Type:</label>
                        <div class="col-sm-9">
                            <select name="user_type" class="form-control" required>
                                <option value=""></option>
                                <option value="Admin">Admin</option>
                                <option value="Store Personel">Store Personel</option>
                                <option value="Encoder">Encoder</option>
                                <option value="MIS">MIS</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="button" id="submitForm" >Submit</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal" id="edit">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Edit User</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times; </span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Name" />
                            <input type="hidden" class="form-control" id="id" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">New Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password"  placeholder="Enter new password" />
                            <small class="form-text text-muted">Leave it blank if not changing</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_type" class="col-sm-3 col-form-label">User Type:</label>
                        <div class="col-sm-9">
                            <select name="user_type" class="form-control" id="user_type">
                                <option value="" disabled>User Type</option>
                                <option value="Admin" selected>Admin</option>
                                <option value="Store Personel">Store Personnel</option>
                                <option value="Encoder">Encoder</option>
                                <option value="MIS">MIS</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="button" id="update">Update</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>