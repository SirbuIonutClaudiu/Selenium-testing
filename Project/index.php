<?php
 include 'connect_db.php';
 include 'create_users_db.php';
 include 'FDB_create.php';
 include 'default_values.php';
?>

<html>
 <body>
  <form action="sign_in.php" id="form" name="form"></form>
  <script type="text/javascript">
   document.forms["form"].submit();
  </script>
 </body>
</html>

