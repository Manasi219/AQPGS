<!DOCTYPE html>
<html>
<body>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("glenn", $people, FALSE))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>

</body>
</html>