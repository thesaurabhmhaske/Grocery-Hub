<?php

    if(isset($_POST['sub']))
    {
        $UserName = $_POST['name'];
        $Email = $_POST['email'];
        $Number = $_POST['number'];
        $Subject = $_POST['subject'];
        $Msg = $_POST['message'];
    
    
    if(empty($UserName) || empty($Email) || empty($Number) || empty($Subject) || empty($Msg))
    {
        header('location:index.php?error');
    }
    else
    {
        $to = "mayankpatidar275@gmail.com";

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

