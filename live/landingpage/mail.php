 <?php
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
    {
    $name=$_POST['name'];
     $phone=$_POST['phone'];
    $email=$_POST['email'];
    $to="info@nidmm.com";
    $txt="Name:-".$name."\n"."Mobile number:-".$phone."\n"."Email:-".$email;
    if(mail($to,"National Institute of Digital Media Marketing",$txt,"From:$email")) {
    echo "<script>alert('Successfully Message sent')</script>";
    echo '<script>window.location.href="https://nidmm.com/";</script>';
    }else{
    echo "<script>alert('Query Failed')</script>";
    }
}
?>       