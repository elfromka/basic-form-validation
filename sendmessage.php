<?php
    // check if the submit button is clicked in index
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];

        // for check if we have any empty field after pressing the submit
        $errorEmpty = false; // on default false
        $errorEmail = false; // for e-mail address validate

        if (empty($name) || empty($email) || empty($message)) {
            echo '<span class="alert-error">Fill in all the fields!</span>';
            $errorEmpty = true;
        }
        // check if the e-mail address is valid(right format): FILTER_VALIDATE_EMAIL
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<span class="alert-error">Enter a valid e-mail address!</span>';
            $errorEmail = true;
        } else {
            echo '<span class="alert-success">Message was sent successfully!</span>';
        }
    } else {
        echo '<span class="alert-error">Something went wrong...</span>';
    }
?>

<script>
    $("#form-name, #form-email, #form-gender, #form-message").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty;?>";
    var errorEmail = "<?php echo $errorEmail;?>";

    // if any input is empty then select
    // those inputs
    if (errorEmpty == true) {
        $("#form-name, #form-email, #form-gender, #form-message").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#form-email").addClass("input-error");
    }
    if (errorEmpty == false && errorMail == false) {
        $("#form-name, #form-email, #form-message").val("");
    }
</script>