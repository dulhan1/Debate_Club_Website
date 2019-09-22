<?php
 if (isset($_POST['comments'])) {
     $email = "ndh163040@gnspes.ca";
     $content = ($_POST['comments']);
     $subject = "Debate Club Comments";
     mail($email, $subject, $content);
    
        header("Location:sent.html");
        exit;
    } else {
        exit;
        
    }

 
?> 