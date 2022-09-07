<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['nam'];
       $Email = $_POST['email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($email) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "manojkr825313@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>