
<!-- Add Customer Modal -->
<div class="modal fade" id="addCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="regForm" method="POST">
      <div class="modal-body">
                    <div class="row mx-auto">
                  <fieldset class="form-group col-12">
                    <h5>1. Personal Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">First Name <code>*</code></p>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Last Name <code>*</code></p>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Company Name</p>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Phone Number <code>*</code></p>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Address</p>
                    <textarea class="form-control" id="address" name="address"></textarea>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>2. Account Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Email Address <code>*</code></p>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="john.doe@gmail.com">
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Password  <code>*</code></p>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="*********">
                    <small id="validatePassword">Password must be 8 characters long.</small>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Confirm Password  <code>*</code></p>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="*********">
                    <small id="checkMatch">Password did not match.</small>
                    <small id="matched">Password matched.</small>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>3. Subscription</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">List of Subscription<code>*</code></p>
                    <select class="form-control" name="subscription" required>
                        <option value="1">Lite Plan</option>
                        <option value="2">Pro Plan</option>
                        <option value="3">Premium Plan</option>
                    </select>
                  </fieldset>
                  </div>
                  <div class="form-group text-center" id="progress">
                      
                  </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addCustomer" id="addCustomer" class="btn btn-warning" value="Submit">
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Edit Client Modal -->
<div class="modal fade" id="editCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="regForm" method="POST">
      <div class="modal-body">
                <input type="hidden" class="clientid" id="client_id" name="id">
                    <div class="row mx-auto">
                  <fieldset class="form-group col-12">
                    <h5>1. Personal Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">First Name <code>*</code></p>
                    <input type="text" class="form-control" id="edit_name" name="first_name" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Phone Number <code>*</code></p>
                    <input type="number" class="form-control" id="editphone_number" name="phone_number" required>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Address</p>
                    <textarea class="form-control" id="editaddress" name="address"></textarea>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>2. Account Information</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Email Address <code>*</code></p>
                    <input type="email" class="form-control" id="editemail" name="email" required placeholder="john.doe@gmail.com">
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">Password  <code>*</code></p>
                    <input type="password" class="form-control" id="editpassword" name="password" required placeholder="*********">
                    <small id="validatePassword">Password must be 8 characters long.</small>
                  </fieldset>
                  
                  <fieldset class="form-group col-12">
                    <h5>3. Subscription</h5>
                  </fieldset>
                  <fieldset class="form-group col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-muted">List of Subscription<code>*</code></p>
                    <select class="form-control" name="subscription" required>
                        <option value="1">Lite Plan</option>
                        <option value="2">Pro Plan</option>
                        <option value="3">Premium Plan</option>
                    </select>
                  </fieldset>
                  </div>
                  <div class="form-group text-center" id="progress">
                      
                  </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="addCustomer" id="addCustomer" class="btn btn-warning" value="Submit">
      </div>
    </form>
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- Delete Customer Modal -->
<div class="modal fade" id="deleteCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="delete" action="client_delete.php" method="POST">
      <div class="modal-body">
                    <div class="row mx-auto">
                <input type="hidden" class="client_id" name="id">
                        <h1 class="text-center">
                            Delete this data?
                        </h1>
                  </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="deleteCustomer" id="deleteCustomer" class="btn btn-danger" value="Delete">
      </div>
    </form>
    </div>
  </div>
</div>
