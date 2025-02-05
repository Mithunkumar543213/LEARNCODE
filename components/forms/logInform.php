<!-- login form model start from here -->

<div class="modal fade " id="LogInModal" tabindex="-1" aria-labelledby="LogInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header custom-reg-form ">
        <h1 class="modal-title fs-5" id="LogInModalLabel">LogIn Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body custom-reg-form ">
        <!-- login form satrt here -->
        <form id="stuLogForm" action="#" method="post" class="p-4 rounded custom-reg-form " >
            
            <div class="mb-3">
            <label for="logEmail" class="form-label"><i class="fa-solid fa-envelope"> </i> Email</label>
            <input type="email" class="form-control" id="logEmail" name="logEmail" required>
            </div>
            <div class="mb-3">
            <label for="logPassword" class="form-label"><i class="fa-solid fa-key"> </i> Password</label>
            <input type="password" class="form-control" id="logPassword" name="logpassword" required>
            </div>
            
        </form>
        <!-- login form end here -->

    
      </div>
      <div class="modal-footer custom-reg-form ">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button id="stuLogBtn" type="submit" class="btn btn-success">LogIn </button>
      </div>
    </div>
  </div>
</div>
<!-- login form models end here -->