<?php
echo "hellow";
//check get
if(isset($_POST['name'])){
  echo 'POST : your name is '.$_POST['name'];
}
//check Post
if(isset($_GET['name'])){
  echo 'GET : your name is '.$_GET['name'];
}
?>
