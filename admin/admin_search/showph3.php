<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'databaseunivercetytaiz');

$gid = intval($_GET['id']);
$desplay = "select * from genderal where id=" . $gid . " ";
$quyredesplay = mysqli_query($con, $desplay);
$result = mysqli_fetch_assoc($quyredesplay);

if (isset($gid) and is_numeric($gid)) {
?>
    <img src="<?php echo $result['ingala']; ?> " onclick="window.print();" height="800px" while="800px">


<?php
}
?>