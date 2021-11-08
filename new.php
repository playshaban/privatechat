<?php
   session_start();

   if(!isset($_SESSION['uid']))
   {
    ?> <script> alert("Session not set") </script> <?php
   }

?>
<html>
<head>

<title>
new php page
</title>
</head>

<body>
<h1> this is login page and you enterd your email <?php echo $_SESSION['uid']?> </h1>


</body>



</html>
