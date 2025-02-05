<!-- admin login form  model start here -->

<div class="modal fade " id="adminLogInModal" tabindex="-1" aria-labelledby="adminLogInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header custom-reg-form ">
        <h1 class="modal-title fs-5" id="adminLogInModalLabel">Admin LogIn Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body custom-reg-form ">
        <!-- admin login form satrt here -->
        <form id="adminLogForm" action="#" method="post" class="p-4 rounded custom-reg-form " >
            
            <div class="mb-3">
            <label for="adminlogEmail" class="form-label"><i class="fa-solid fa-envelope"> </i> Email</label>
            <input type="email" class="form-control" id="adminlogEmail" name="adminlogEmail" required>
            </div>
            <div class="mb-3">
            <label for="adminlogPassword" class="form-label"><i class="fa-solid fa-key"> </i> Password</label>
            <input type="password" class="form-control" id="adminlogPassword" name="adminlogpassword" required>
            </div>
            
        </form>
        <!-- admin login form end here -->

    
      </div>
      <div class="modal-footer custom-reg-form ">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button id="adminLogBtn" type="submit" class="btn btn-success">LogIn </button>
      </div>
    </div>
  </div>
</div><!-- admin login form  model end here -->
