<?php 
include '../config/conn.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['contact']);
    $services = mysqli_real_escape_string($conn, $_POST['services']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    $sql = mysqli_query($conn, "INSERT INTO contactform(name, email, contact, services, comments) 
                    VALUES('$name','$email','$phone','$services','$comments')");

    $to = "emailwazid@gmail.com";
    $subject = "You have received an Enquiry from gk watches ";
    $message = "
        Name : $name  <br>
        Email : $email  <br>
        Comments: $comments <br>
        Phone: $phone <br>
        services: $services
        
    ";
    $headers  = "From: Construction Helps <constructionhelps@gmail.com>\n";
    $headers .= "CC: <shahnawazkhanppczone@gmail.com> \n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    if(mail($to, $subject, $message, $headers)){
        echo "<script language='JAVASCRIPT'>
            window.alert('Thank you for contacting us! Our Representative Will Call You Shortly!');
            window.location.href='../index';
            </script>";
    }
    
}



?>