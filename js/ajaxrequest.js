$(document).ready(function() {
    // Ajax Call form already exists Email verification.....** issues in email verification....
    $("#stuemail").on("blur keypress", function() {
        var stuemail = $("#stuemail").val();
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            data: {
                checkemail: "checkmail",
                stuemail: stuemail,
            },
            success: function(data) {
                // console.log(data);
                // if (data != 0) {
                //     $("#statusMsg2").html(
                //         '<small style="color:red;"> Email ID Already Used !</small>'
                //     );
                //     $("#signup").prop('disabled', true);
                // } else if (data == 0 && reg.test(stuemail)) {
                //     $("#statusMsg2").html(
                //         '<small style="color:green;"> There You Go !</small>'
                //     );
                //     $("#signup").prop('disabled', false);
                // } else if (!reg.test(stuemail)) {
                //     $("#statusMsg2").html(
                //         '<small style="color:red;"> Please Enter valid Email e.g. example@gmail.com!</small>'
                //     );
                //     $("#signup").prop("disabled", false);
                // }
                // if (stuemail == "") {
                //     $("#statusMsg2").html(
                //         '<small style="color:red;"> please enter email !</small>'
                //     );
                // }
            },
        });
    });
});

function addStu() {
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    // checking form fields on form submission
    if (stuname.trim() == "") {
        $("#statusMsg1").html(
            '<small style="color:red;">Please Enter Name !</small>'
        );
        $("#stuname").focus();
        return false;
    } else if (stuemail.trim() == "") {
        $("#statusMsg2").html(
            '<small style="color:red;">Please Enter Email !</small>'
        );

        $("#stuemail").focus();
        return false;
    } else if (stuemail.trim() != "" && !reg.test(stuemail)) {
        $("#statusMsg2").html(
            '<small style="color:red;">Please Enter valid Email e.g. example@gmail.com</small>'
        );

        $("#stuemail").focus();
        return false;
    } else if (stupass.trim() == "") {
        $("#statusMsg3").html(
            '<small style="color:red;">Please Enter Password !</small>'
        );
        $("#stupass").focus();
        return false;
    } else {
        $.ajax({
            url: "Student/addstudent.php",
            method: "POST",
            // dataType: "text",1111
            data: {
                stusignup: "stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass,
            },
            // made solved isses in this section............///
            success: function(data) {
                // console.log(data);
                if (data == "Ok") {
                    $("#successMsg").html(
                        "<span class='alert alert-success'>Registration sucessfull !</span>"
                    );
                    // clearStuRegField()
                } else if (data == "Failed") {
                    $("#successMsg").html(
                        "<span class='alert alert-danger'>Unable Registrer !</span>"
                    );
                }
            },
        });
    }

    alert("Registration Successfull!");
    clearStuRegField();
}

// Empty all fileds
function clearStuRegField() {
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}

// Ajax call for student Login Verififation///////// issues in suucess alert msg
function checkStuLogin() {
    // console.log("Login click")
    var stuLogEmail = $("#stuLogemail").val();
    var stuLogPass = $("#stuLogpass").val();

    $.ajax({
        url: "Student/addstudent.php",
        type: "POST",
        data: {
            checkLogemail: "checklogmail",
            stuLogEmail: stuLogEmail,
            stuLogPass: stuLogPass,

        },
        success: function(data) {
            // console.log(data);
            if (data == 0) {
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password !</small>');

            } else if (data == 1) {
                $("#statusLogMsg").html(
                    '<div class="spinner-border text-success" role="status"></div>'

                );


            }
            // alert(" Successfully You are logged in!");

            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        },

    });
}