//Ajax call for admin login verification
function adminLogInCheck(){
    event.preventDefault();
    let adminLogEmail = $("#adminlogEmail").val().trim();
    let adminLogPass = $("#adminlogPassword").val().trim();
    console.log(adminLogEmail, adminLogPass);

    if (adminLogEmail === "" || adminLogPass === "") {
        $("#adminMsg").html('<span class="alert alert-danger">All fields are required!</span>');
        return;
    }

    $.ajax({
        url: "Admin/admin.php",
        method: "POST",
        dataType: "json",
        data: {
            checkAdminLogEmail: "checkAdminLogEmail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass      

        },  
        success: function (data) {
            console.log(data);
            if (data.error == "Invalid") {
                console.log("1");
                $("#adminMsg").html('<span class="alert alert-danger">Invalid email or password!</span>');
            } else if (data.status == "OK") {
                console.log("2");
                console.log(data.status)
                $("#adminMsg").html("<span class='spinner-border text-success'></span>");
                setTimeout(() => {
                    window.location.href = "Admin/adminDashbord.php";
                }, 500);
                
            }
            else if (data.error=="Fill All Field") {
                console.log("5");
                $("#adminMsg").html('<span class="alert alert-danger">All Fields Required </span>');
            }else if (data.error=="Not Found") {
                console.log("4");
                $("#adminMsg").html('<span class="alert alert-danger">User Not Found </span>');
            }else if (data.error=="Already Logged In") {
                console.log("4");
                $("#adminMsg").html('<span class="alert alert-danger">Already Logged In</span>');
            }                                             
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("6");
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR);
            $("#adminMsg").html("<span class='alert alert-danger'>An error occurred. Please try again later.</span>");
        }
    });
}
