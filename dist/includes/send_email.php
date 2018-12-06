<?php 
// print_r($_POST);
    //Message Vars
    $msg = '';
    $msgClass ='';
    // Check for Submit
    if(filter_has_var(INPUT_POST, 'submit')) {
    //Get From Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    //Check Required Fields
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        //Passed
        // Check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        } else {
            $toEmail = 'contact@danidantas.com';
            $sSubject = $subject;
            $body = '<h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

            // Email headers        
            $headers = "MIME-Version: 1.0" . "\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "
                        \n";

            //Additional headers
            $headers .= "From: " . $name . "<". $email .">". "\n";

            if(mail($toEmail, $sSubject, $body, $headers)){
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        //Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}


?>