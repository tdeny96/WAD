<?php
$vote = $_REQUEST['vote'];
$filename = "poll_result.txt";
$content = file($filename);

$array = explode("||", $content[0]);
$one = $array[0];
$two = $array[1];
$three = $array[2];
$four = $array[3];
$five = $array[4];

if ($vote == 0) {
  $one = $one + 1;
}
if ($vote == 1) {
  $two = $two + 1;
}
if ($vote == 2) {
  $three = $three + 1;
}
if ($vote == 3) {
  $four = $four+ 1;
}
if ($vote == 4) {
  $five = $five + 1;
}

$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Note:</td>
<td>
<?php echo(($one*1+$two*2+$three*3+$four*4+$five*5)/5)); ?>
</td>
</tr>
</table> 