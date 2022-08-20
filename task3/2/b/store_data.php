<?php

  $_SESSION["name"] = $_POST["name"];
  $_SESSION["surname"] = $_POST["surname"];
  $_SESSION["age"] = $_POST["age"];
  header("Refresh:3; url=display_data.php");

?>