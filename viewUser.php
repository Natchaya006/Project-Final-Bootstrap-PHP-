<title>Report User</title>
<?php
$connect = mysqli_connect("localhost","id1494919_admin","admin","id1494919_movie_shop");
if(empty($_POST['sort'])){
  include 'adminUser.php';
}
else{
  if($_POST['title'] == 'Name' && $_POST['sort'] == 'asc'){
    $sql = 'SELECT * FROM user ORDER BY Fname ASC';
  }
  else if ($_POST['sort'] == 'desc'){
    $sql = 'SELECT * FROM user ORDER BY Fname DESC';
  }
  $result = mysqli_query($connect,$sql);
  $numrows = mysqli_num_rows($result);
  $numfields = mysqli_num_fields($result);
  echo '<br><h3><b>Report</b></h3>';
  echo '<table cellpadding = "3" border = "1">';
  echo '<tr>';
  echo '<td width = "50" align = "center"><b>No.</b></td>';
  echo '<td width = "60" align = "center"><b>User ID</td>';
  echo '<td width = "200" align = "center"><b>Firstname</b></td>';
  echo '<td width = "200" align = "center"><b>Lastname</b></td>';
  echo '<td width = "150" align = "center"><b>Address Line 1</b></td>';
  echo '<td width = "150" align = "center"><b>Address Line 2</b></td>';
  echo '</tr>';
  $num = 1;
      while($row = mysqli_fetch_array($result))
      {
        echo '<tr>';
        echo '<td align = "center">'.$num.'.</td>'."\n";
        $num++;
        for ($i = 0; $i < $numfields ; $i++)
        {
          if($i==0){
            echo '<td align = "center">'.$row[$i].'</td>'."\n";
          }
          else{
          if($i!=4 && $i!=7 && $i!=3)
              echo '<td>&nbsp;'.$row[$i].'</td>'."\n";
        }
      }
        echo '</tr>';
      }
      echo '</table>';
      mysqli_close($connect);
}
?>
