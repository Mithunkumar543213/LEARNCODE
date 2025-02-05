<!-- registration forms model started here -->

<!-- Modal -->
<div class="modal fade " id="RegistrationModal" tabindex="-1" aria-labelledby="RegistrationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header custom-reg-form ">
        <h1 class="modal-title fs-5" id="RegistrationModalLabel">Registration Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body custom-reg-form ">
        <!-- registration form satrt here -->
        <form action="register.php" method="post" class="p-4 rounded custom-reg-form " >
            <div class="mb-3">
            <label for="regName" class="form-label"><i class="fas fa-users mr-3"> </i> Name</label>
            <input type="text" class="form-control bg-tertiary" id="regName" name="name" required>
            </div>
            <div class="mb-3">
            <label for="regEmail" class="form-label"><i class="fa-solid fa-envelope"> </i> Email</label>
            <input type="email" class="form-control" id="regEmail" name="email" required>
            </div>
            <div class="mb-3">
            <label for="regPassword" class="form-label"><i class="fa-solid fa-key"> </i> Password</label>
            <input type="password" class="form-control" id="regPassword" name="password" required>
            </div>
            <div class="mb-3">
            <label for="regConfirmPassword" class="form-label"><i class="fa-solid fa-key"> </i> Confirm Password</label>
            <input type="password" class="form-control" id="regConfirmPassword" name="confirm_password" required>
            </div>
        </form>
        <!-- registration form end here -->

    
      </div>
      <div class="modal-footer custom-reg-form ">
        <span id="Message"></span>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button onclick="regDataHandaling()" id="stuRegBtn" type="submit" class="btn btn-success">Register</button>
      </div>
    </div>
  </div>
</div><!-- registration forms model end here -->
