// Ajax call for admin Login Verififation///
function checkAdminLogin() {
    // console.log("Login click")
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();

    $.ajax({
        url: "Admin/admin.php",
        type: "POST",
        data: {
            checkLogemail: "checklogmail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,

        },
        success: function(data) {
            console.log(data);
            // if (data == 0) {
            //     $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password !</small>');

            // } else if (data == 1) {
            //     $("#statusAdminLogMsg").html(
            //         '<small class="alert alert-success">Success loading... !</small>'

            //     );


            // }
            setTimeout(function() {
                window.location.href = "Admin/adminDashboard.php";
            }, 1000);
        },

    });
}