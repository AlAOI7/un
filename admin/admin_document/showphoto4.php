<?php
error_reporting(E_ALL ^ E_NOTICE);
include "conectdb/concte.php";
$gid = intval($_GET['id']);
$desplay = "select * from aplouddd where id=" . $gid . " ";
$quyredesplay = mysqli_query($con, $desplay);
$result = mysqli_fetch_assoc($quyredesplay);

if (isset($gid) and is_numeric($gid)) {
?>
    <img src="<?php echo $result['ab']; ?> " onclick="window.print();" height="500px" while="500px">


<?php
}
?>