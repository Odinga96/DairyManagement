<form class="" action="#" method="get">
      <input type="text" name="n" value=""><br><br>
      <input type="number" name="a" value=""><br><br>
      <input type="date" name="d" value=""><br><br>
      <input type="submit" name="s" value="submit">

</form>

<?php

if (isset($_GET['s']))
{
  $na=$_GET['n'];
  $ag=$_GET['a'];
  $da=$_GET['d'];
}


?>
