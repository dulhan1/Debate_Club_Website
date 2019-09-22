<?php
  if(isset($_POST['password'])) {
      if($_POST['password'] == 'thewest') {
          header("Location:forum.html");
          exit;
      } else {
          header("Location:wrong.html");
          exit;
      }
      } else{
          exit;
      }
      
 
?>