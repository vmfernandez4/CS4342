<?php
      //Specify the Database server host
      define('DB_SERVER', 'ilinkserver.cs.utep.edu');
      //Specify the Database username
      define('DB_USERNAME', 'camontgomery');
      //Specify the Database password
      define('DB_PASSWORD', 'raiders73');
      //Choose the Database (name)
      define('DB_DATABASE', 'spr19_team6');
      //We make the connection.
      $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>