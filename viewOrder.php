<title>Report Order</title>
<?php
$connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
if(empty($_POST['sort'])){
  include 'adminOrder.php';
}
else{
if($_POST['title'] == 'Movie ID'){
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM list ORDER BY MID asc';
  }
  else{
$sql = 'SELECT * FROM list ORDER BY MID desc';
  }
}
else if($_POST['title'] == 'User ID'){
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM list ORDER BY User_ID asc';
  }
  else{
$sql = 'SELECT * FROM list ORDER BY User_ID desc';
  }
}
else if($_POST['title'] == 'Quantity'){
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM list ORDER BY OQuantity asc';
  }
  else{
$sql = 'SELECT * FROM list ORDER BY OQuantity desc';
  }
}
else if($_POST['title'] == 'Price'){
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM list ORDER BY OPrice asc';
  }
  else{
$sql = 'SELECT * FROM list ORDER BY OPrice desc';
  }
}
else{
  if($_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM list ORDER BY Status asc';
  }
  else{
    $sql = 'SELECT * FROM list ORDER BY Status desc';
  }
}
$result = mysqli_query($connect,$sql);
echo '<br><h3><b>Report</b></h3>';
echo '<table cellpadding = "3" border = "1">';
echo '<tr>';
echo '<td width = "50" align = "center"><b>No.</td>';
echo '<td width = "70" align = "center"><b>Order ID</td>';
echo '<td width = "200" align = "center"><b>Movie ID</b></td>';
echo '<td width = "100" align = "center"><b>User ID</b></td>';
echo '<td width = "100" align = "center"><b>Quantity</b></td>';
echo '<td width = "100" align = "center"><b>Price</b></td>';
echo '<td width = "85" align = "center"><b>Status</b></td>';
echo '</tr>';
$num = 1;
while($row = mysqli_fetch_assoc($result))
{
  echo '<tr>';
  echo '<td align = "center">'.$num.'.</td>'."\n";
  $num++;
  while(list($key,$value) = each($row)){
    if($value == ''){
      echo '<td align=center>'.'&nbsp;'.'</td>';
    }
    else{
      echo '<td align=center>'.$value.'</td>';
    }
}
  echo '</tr>';
}
echo '</table>';
mysqli_close($connect);
}
?>
