<?php

    if(isset($_POST['sub2']))
    {
        $SubEmail = $_POST['sub_email'];
        $Msg3 = "Congratulations!!! the above id has subscribed to your Newsletter.";
        $Subject = "Newsletter";
    
    
    if(empty($SubEmail))
    {
        header('location:index.php?error2');
    }
    else
    {
        $to = "mayankpatidar275@gmail.com";

        if(mail($to,$Subject,$Msg3,$SubEmail))
        {
            header("location:index.php?success2");
        }
    }
}
else
{
    header("location:index.php");
}
?>
