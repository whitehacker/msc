
<?php
if(isset($_GET['lang'])){
  if($_GET['lang']==ps){
    include("language/ps.php");
  }
  else{
    include("language/da.php");
  }
  
}
else{
  include("language/en.php");
  
}

?>
<!Doctype html>


<html dir="<?php echo $dir; ?>">
<head>
  <meta charset="UTF-8">
  
</head>

<body>
  <div class="">
    <a href="<?php echo $url1; ?>"><?php echo $lang1; ?></a> | <a href="<?php echo $url2; ?>"><?php echo $lang2; ?></a>
  </div>
  <h3><?php echo $head; ?></h3>
  
  <p><?php echo $par; ?></p>
  
  <input type="submit" value="<?php echo $btn; ?>">
</body>

</html>