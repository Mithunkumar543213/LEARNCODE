$(document).ready(function () {
    $("#regEmail").on("keypress blur", function () {
        let email = $("#regEmail").val();
        $.ajax({
            url: "students/addStudent.php",
            method: "POST",
            dataType: "json",
            data: {
                checkemail: "checkemail",
                stuemail: email
            },
            success: function (data) {
                //console.log(data);
                if(data!=0){
                    $("#emailMsg").html("<small style='color:red;'>Email already exists!</small>");
                    $("#stuRegBtn").attr("disabled", true);
                } else if(data==0 && validateEmail(stuemail)){
                    $("#emailMsg").html("<span style='color:green;'>Email available</span>");
                    $("#stuRegBtn").attr("disabled", false);
                } 
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log("AJAX Error:", textStatus, errorThrown, jqXHR);
            }
        });
    });
});

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
        $("#stuRegBtn").attr("disabled", false);
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

//Ajax call for student login verification
function stuLogIn(){
    let stuLogEmail = $("#logEmail").val().trim();
    let stuLogPass = $("#logPassword").val().trim();
    //console.log(stuLogEmail, stuLogPass);

    if (stuLogEmail === "" || stuLogPass === "") {
        $("#logMsg").html("<span class='alert alert-danger'>All fields are required!</span>");
        return;
    }

    $.ajax({
        url: "students/addStudent.php",
        method: "POST",
        dataType: "json",
        data: {
            checkLogEmail: "checkLogEmail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass      

        },  
        success: function (data) {
            console.log(data);
            if (data.error == "Invalid") {
                $("#logMsg").html("<span class='alert alert-danger'>Invalid email or password!</span>");
            } else if (data.status == "OK") {
                $("#logMsg").html("<span class='alert alert-success'>Login Successful</span>");
                window.location.href = "index.php";
            }else if (data.error=="Fill All Field") {
                $("#logMsg").html("<span class='alert alert-danger'> Fill All Field</span>");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("AJAX Error:", textStatus, errorThrown, jqXHR);
            $("#logMsg").html("<span class='alert alert-danger'>An error occurred. Please try again later.</span>");
        }
    });
}
