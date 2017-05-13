<title>Report Movies</title>
<?php
$connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
if(empty($_POST['sort'])){
  include 'adminMovie.php';
}
else{
if($_POST['title'] == 'Name'){
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM movies ORDER BY Mname ASC';
  }
  else{
    $sql = 'SELECT * FROM movies ORDER BY Mname DESC';
  }
}
else if ($_POST['title'] == 'Category'){
  if($_POST['sort'] == 'asc'){
      $sql = 'SELECT * FROM movies ORDER BY MCategory ASC';
  }
  else{
    $sql = 'SELECT * FROM movies ORDER BY MCategory DESC';
  }
}
else if ($_POST['title'] == 'Price'){
  if($_POST['sort'] == 'asc'){
      $sql = 'SELECT * FROM movies ORDER BY MPrice ASC';
  }
  else{
    $sql = 'SELECT * FROM movies ORDER BY MPrice DESC';
  }
}
$result = mysqli_query($connect,$sql);
$numrows = mysqli_num_rows($result);
$numfields = mysqli_num_fields($result);
echo '<br><h3><b>Report</b></h3>';
echo '<table cellpadding = "3" border = "1">';
echo '<tr>';
echo '<td width = "50" align = "center"><b>No.</b></td>';
echo '<td width = "300" align = "center"><b>Movie Name</td>';
echo '<td width = "100" align = "center"><b>Category</b></td>';
echo '<td width = "60" align = "center"><b>Quantity</b></td>';
echo '<td width = "80" align = "center"><b>Price</b></td>';
echo '</tr>';
$num = 1;
while($row = mysqli_fetch_array($result))
{
  echo '<tr>';
  echo '<td align = "center">'.$num.'.</td>'."\n";
  $num++;
  for ($i = 0; $i < $numfields ; $i++)
  {
    if($i != 0){
      if($i==4){
        echo '<td align = "right">'.$row[$i].'</td>'."\n";
      }
      else if($i == 2 || $i == 3){
        echo '<td align = "center">'.$row[$i].'</td>'."\n";
      }
      else{
        echo '<td>&nbsp;&nbsp;'.$row[$i].'</td>'."\n";
      }
    }
  }
  echo '</tr>';
}
echo '</table>';
mysqli_close($connect);
}
?>
