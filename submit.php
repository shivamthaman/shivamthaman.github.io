<?php 
if(isset($_POST['submit'])){
    $to = "thamanshivam680@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $address= $_POST['address'];
    $city = $_POST['city'];
     $state = $_POST['state'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $dob = $_POST['dob'];
     $college = $_POST['college'];
    $class = $_POST['class'];
    $year = $_POST['year'];
     $Leadership = $_POST['Leadership'];
     $ContentWriting = $_POST['ContentWriting'];
     $Creative = $_POST['Creative'];
     $Adaptability = $_POST['Adaptability'];
     $ComputerProgramming = $_POST['ComputerProgramming'];
     $Management = $_POST['Management'];
     $PublicSpeaking = $_POST['PublicSpeaking'];
       $other = $_POST['other'];   
    $message = "Name:" . $full_name . "\n\n"."Address:" . $address . "\n\n". "City:" . $city . "\n\n"."State:" . $state .  "\n\n". "E-mail:" .$email . "\n\n". "Mobile:" .$mobile. "\n\n". "DOB:" .$dob. "\n\n". "college:" . $college ."\n\n" . $class . "\n\n". $year.
     "\n\n".   $Leadership ."\n\n". $ContentWriting ."\n\n".$Creative ."\n\n". $Adaptability ."\n\n". $ComputerProgramming."\n\n".
     $Management ."\n\n".  $PublicSpeaking ."\n\n". $other ;
   

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Form Submitted. Thank you " . $full_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
