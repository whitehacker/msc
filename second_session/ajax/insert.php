<?php
$content=$_POST['content'];
mysql_connect("localhost","root","");
mysql_select_db("msc");
if(isset($content)){
  $insert=mysql_query("INSERT INTO posts(id,post) VALUES(null,'$content')");
  if($insert){
    $select=mysql_query("SELECT * FROM posts order by date desc");
    $row=mysql_fetch_array($select);
      
      echo "<div class='alert alert-info'>" . $row['post'] . "</div><br/>";
  
  }
}


?>