<?php
include('connect.php');
include('functions.php');
if(isset($_POST)) {
$item_id = abs(intval($_POST['item_id']));
$ip = get_real_ip();

//$con=mysqli_connect("localhost","root","Rahasia1","test");
$con=mysqli_connect("localhost","root","","foodandfun");

$query = mysqli_query($con,"SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
$check = mysqli_num_rows($query);

//$query = mysql_query("SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1");
//$check = mysql_num_rows($query);

if ($check == 0) {
$datetime = time();


//$add = mysql_query("INSERT INTO likes (item_id,ip) VALUES ('$item_id','$ip')");
$add = mysqli_query($con,"INSERT INTO likes (item_id,ip) VALUES ('$item_id','$ip')");

if ($add) {

//$check = mysql_query("SELECT item_id FROM likes WHERE item_id='$item_id'");
//$number = mysql_num_rows($check);

$check = mysqli_query($con,"SELECT item_id FROM likes WHERE item_id='$item_id'");
$number = mysqli_num_rows($check);

sleep(1);
echo 'Liked <span>'.$number.'</span>';
}
} else {
echo 0;
}
} else {
echo 0;
}