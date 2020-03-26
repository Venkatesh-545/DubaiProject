<html>
    <title>
        Thank You for Your Response
   </title>
</html>
    <?php

     
    //collect form data
    $name = $_POST['fname'];
	$email = $_POST['uemail'];
    $subject = $_POST['address'];
    $phone = $_POST['mobile'];
    $message = $_POST['message'];

    $Content = $name.",".$email.",".$subject.",".$phone.",".$message;
    
   $file="UserData.csv";
   file_put_contents($file,$Content.PHP_EOL,FILE_APPEND);
   echo '<script type="text/javascript">';
   echo 'alert("Your Response has been submited")';  //not showing an alert box.
   echo '</script>';
 ?>
