<section class="row container-fluid dashboard-tab">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs flex-wrap" role="tablist">
        <li class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#posting" role="tab" aria-controls="posting" aria-expanded="true">Postings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-expanded="false">Drafts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-expanded="false">Searches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-expanded="false">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#billing" role="tab" aria-controls="billing" aria-expanded="false">Billing</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content dashboard-tab-information">
        <div class="tab-pane active" id="posting" role="tabpanel" aria-expanded="true">
            <div class="row">
                <div class="col-md-4 pull-left">
                    <div class="col-md-8 small-gutters">
                        <select class="status-slb form-control select2">
                            <option value="">All</option>
                            <option value="1">Most recent</option>
                            <option value="2">Active</option>
                            <option value="3">Inactive</option>
                            <option value="4">Deleted</option>
                        </select>
                    </div>
                    <div class="col-md-4 small-gutters">
                        <button class="btn btn-apply text-uppercase">Apply</button>
                    </div>
                </div>
                <div class="col-md-8 pull-right text-right">
                    <div class="col-sm-4 col-md-4 col-lg-5 col-xl-6 small-gutters">
                        <input class="form-control" type="text" name="s_value" placeholder="Enter your keyword">
                    </div>

                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        <select class="cat-slb form-control">
                            <option value="">All</option>
                            <option value="1">Categorry 1</option>
                            <option value="2">Categorry 2</option>
                            <option value="3">Categorry 3</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        <select class="month-slb form-control">
                            <option value="">All</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    
                    <div class="col-md-2 small-gutters text-left no-pdr">
                        <button class="btn btn-apply text-uppercase fullwidth">Filter</button>
                    </div>

                </div>
                
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-default">
                            <tr>
                                <th>Status</td>
                                <th>Posting title</td>
                                <th>Category</td>
                                <th>Posted date</td>
                                <th>Expire</td>
                                <th>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-status"><span class="active">Active</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>n/a</td>
                                <td><a href="#">Display</a> | <a href="#">Inactive</a> | <a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Renew</a></td>
                            </tr>
                            <tr>
                                <td class="col-status"><span class="inactive">Inactive</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>15 days from now</td>
                                <td><a href="#">Display</a> | <a href="#">Active</a> | <a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Renew</a></td>
                            </tr>
                            <tr>
                                <td class="col-status"><span class="active">Active</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>15 days from now</td>
                                <td><a href="#">Display</a> | <a href="#">Inactive</a> | <a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Renew</a></td>
                            </tr>
                            <tr>
                                <td class="col-status"><span class="deleted">Deleted</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>n/a</td>
                                <td><a href="#">Display</a> | <a href="#">Undelete</a> | <a href="#">Edit</a> | <a href="#">Renew</a></td>
                            </tr>
                            <tr>
                                <td class="col-status"><span class="active">Active</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>15 days from now</td>
                                <td><a href="#">Display</a> | <a href="#">Inactive</a> | <a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Renew</a></td>
                            </tr>
                            <tr>
                                <td  class="col-status"><span class="active">Active</span></td>
                                <td><a href="#">Title of posting here...</a></td>
                                <td><a href="#">Category name here...</a></td>
                                <td>27 Dec 2018</td>
                                <td>n/a</td>
                                <td><a href="#">Display</a> | <a href="#">Inactive</a> | <a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Repost</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 text-center">
                    <input class="btn button" type="button" name="s_button" value="View more">
                </div>
            </div>
        </div>  
        <div class="tab-pane" id="draft" role="tabpanel" aria-expanded="false">
            <h2>What are content on here ?</h2>
        </div>
        <div class="tab-pane" id="search" role="tabpanel" aria-expanded="false">
            <h2>What are content on here ?</h2>
        </div>
        <div class="tab-pane" id="setting" role="tabpanel" aria-expanded="false">
            <div class="form-group col-md-12">
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label for="txt-email">Email:</label>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        <input type="text" class="form-control valid" name="tn105" id="txt-email" value="vuquocit@gmail.com" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label>Password:</label>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        [<a class="openmodel" data-toggle="modal" data-target="#changpass" href="#">Change password</a>]
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label for="hours-slb">Stay logged in for:</label>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        <select id="hours-slb" class="hours-slb form-control">
                            <option value="1">1 hour</option>
                            <option value="2">2 hours</option>
                            <option value="3">3 hours</option>
                            <option value="4">4 hours</option>
                            <option value="5">5 hours</option>
         
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label for="txt-email">Deactive this account:</label>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        [<a data-toggle="modal" data-target="#deactiveaccount" class="openmodel" href="#">Deactive account</a>]
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 small-gutters">
                        <button class="btn btn-apply text-uppercase">Save</button>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="tab-pane" id="billing" role="tabpanel" aria-expanded="false">
            <h2>What are content on here ?</h2>
        </div>    
    </div>
</section>
<div class="modal fade" id="changpass" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Change password</h2>
            </div>
            <div class="modal-body">
                <div class="row form-group align-items-center">
                    <label for="txt-old-pass" class="col-md-4 text-right">Old password</label>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 small-gutters">
                        <input id="txt-old-pass" class="form-control" type="password" name="txt-old-pass" value="123">
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <label for="txt-confirm-pass" class="col-md-4 text-right">New password</label>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 small-gutters">
                        <input id="txt-confirm-pass" class="form-control" type="password" name="txt-confirm-pass" value="123">
                    </div>
                </div>
                <div class="row form-group align-items-center">
                    <label for="txt-confirm-new-pass" class="col-md-4 text-right">Confirm new password</label>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 small-gutters">
                        <input id="txt-confirm-new-pass" class="form-control" type="password" name="txt-confirm-new-pass" value="123">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button text-uppercase">Save</button>
                    <button type="button" class="btn text-uppercase" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="deactiveaccount" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Are you sure ?</h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button text-uppercase">Yes, I am sure</button>
                    <button type="button" class="btn text-uppercase" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>

