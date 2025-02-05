function regDataHandaling(){
    let stuName = $("#regName").val().trim();
    let stuEmail = $("#regEmail").val().trim();
    let stuPass = $("#regPassword").val().trim();
    let stuConfPass = $("#regConfirmPassword").val().trim();
    console.log(stuName, stuEmail, stuPass, stuConfPass);

    $("#successMsg").html(""); // Clear previous messages

    // **Client-Side Validation**
    if (stuName === "" || stuEmail === "" || stuPass === "" || stuConfPass === "") {
        $("#successMsg").html("<span class='alert alert-danger'>All fields are required!</span>");
        return;
    }

    if (!validateEmail(stuEmail)) {
        $("#successMsg").html("<span class='alert alert-danger'>Invalid email format!</span>");
        $("#regEmail").focus();
        return;
    }

    if (stuPass.length < 6) {
        $("#successMsg").html("<span class='alert alert-danger'>Password must be at least 6 characters long!</span>");
        $("#regPassword"),focus();
        return;
    }

    if (stuPass !== stuConfPass) {
        $("#successMsg").html("<span class='alert alert-danger'>Passwords do not match!</span>");
        $("#regConfirmPassword").focus();
        return;
    }

    // **AJAX Request**
    $.ajax({
        url: "students/addStudent.php",
        method: "POST",
        dataType: "json",
        data: {
            stuname: stuName,
            stuemail: stuEmail,
            stupassword: stuPass,
            stuconfPass: stuConfPass
        },
        success: function (data) {
            console.log(data);
            if (data.status === "OK") {
                $("#successMsg").html("<span class='alert alert-success'>Registration Successful</span>");
                $("#regForm")[0].reset(); // Reset form on success
            } else if (data.error) {
                $("#successMsg").html("<span class='alert alert-danger'>" + data.error + "</span>");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR);
            $("#successMsg").html("<span class='alert alert-danger'>An error occurred. Please try again later.</span>");
        }
    });
}

//**Helper Function: Validate Email Format**
function validateEmail(email) {
    let regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regex.test(email);
}
