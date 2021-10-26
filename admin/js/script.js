$(document).ready(function() {
    $("button#submitLogin").click(function() {
        e = $("#username").val();
        p = $("#password").val();
        if ($("#username").val() == "" || $("#password").val() == "")
            $("div#ack").html("<code>Please input credentials on the fields</code>");
        else
            $.post($("#loginForm").attr("action"),
                //$("#myForm :input").serializeArray(),
                { username: e, password: p },
                function(data) {
                    if (data == "success") {
                        setInterval(function() {
                            window.location.href = "home.php"
                        }, 800);
                    } else {
                        $("div#ack").html(data);
                    }
                });
        $("#loginForm").submit(function() {
            return false;
        });
    });
});


jQuery(document).ready(function($) {

    $("#regForm").submit(function(event) {
        event.preventDefault();
        //validation for login form
        swal({
            icon: "success",
            button: false,
        });

        var formData = new FormData($(this)[0]);
        $.ajax({
            url: 'add-customer.php',
            type: 'POST',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function(returndata) {
                var data = returndata;
                if (data == "duplicate") {
                    swal({
                        title: "Failed",
                        text: "Email already registered. Please try another email.",
                        icon: "error",
                        button: false,
                    })
                } else if (data == "failed") {
                    swal({
                        title: "Failed",
                        text: "Failed to add client.",
                        icon: "error",
                        button: false,
                    })
                } else if (data == "success") {
                    swal({
                        title: "Success",
                        text: "Client added successfully.",
                        icon: "success",
                        button: false,
                    })
                    setInterval(function() {
                        window.location.href = "clients.php"
                    }, 800);
                }

            },
            error: function() {
                swal("Error in ajax form submission");
            }
        });
        return false;
    });
});

$("#password").on("keyup", function() {
    if ($(this).val().length < 8 && $(this).val().length != 0) {
        $("#validatePassword").prop("style", "display:block");
        $("#addCustomer").attr("disabled", true);
    } else if ($(this).val().length == 0) {
        $("#validatePassword").prop("style", "display:block");
        $("#addCustomer").attr("disabled", true);
    } else {
        $("#validatePassword").prop("style", "display:none");
        $("#addCustomer").attr("disabled", false);
    }
})

$("#confirm_password").on("keyup", function() {
    if ($(this).val() != $('#password').val()) {
        $("#checkMatch").prop("style", "display:block");
        $("#matched").prop("style", "display:none");
        $("#addCustomer").attr("disabled", true);
    } else {
        $("#checkMatch").prop("style", "display:none");
        $("#matched").prop("style", "display:block");
        $("#addCustomer").attr("disabled", false);
    }
})


$(document).ready(function() {
    $('#customerTable').DataTable();
});