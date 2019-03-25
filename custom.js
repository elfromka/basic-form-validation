// send the data through AJAX/JS
$(document).ready(function() {
    $("form").submit(function(event) {
        // disable what should be happening 
        // after pressing the submit button
        event.preventDefault();
        var name = $("#form-name").val();
        var email = $("#form-email").val();
        var gender = $("#form-gender").val();
        var message = $("#form-message").val();
        var submit = $("#form-submit").val();
        $(".alert-message").load("sendmessage.php", {
            name: name,
            email: email,
            gender: gender,
            message: message,
            submit: submit
        });
    });
});



