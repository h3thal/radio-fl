<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<script>

function selectch(){
var url="newsup.php?select1="+document.getElementById('select1').value;
document.location.replace(url);
}

</script>


</head>

<body>

<?php

$text="";
$pswd="";
$date1="";
$active = 1;


if(isset($_POST['select1'])){
$select1=$_POST['select1'];
$pswd=$_POST['pswd'];

} else {
 $select1 = 1;	
}

if(isset($_GET['select1'])){
$select1=$_GET['select1'];
} 

$sel1="";
$sel2="";
$sel3="";
$sel4="";

if($select1==1) {$sel1="selected"; }
if($select1==2) {$sel2="selected"; }
if($select1==3) {$sel3="selected"; }
if($select1==4) {$sel4="selected"; }


include("db.php");



if(isset($_POST['formWheelchair']) &&  $_POST['formWheelchair'] == 'Yes') {
	$active=0;
} else {
    $active=1;
}

// $active=1;


if($pswd=="55667788"){
$sql="UPDATE `news` SET `title`='".$_POST['title']."' , `text`='".$_POST['text']."' , `date1`=now() ,   `active`=".$active." WHERE `id`='".$select1."'  ";
//echo $sql ;
$result = mysql_query($sql, $link);	
}





 $sql= "SELECT * FROM `news` WHERE id=".$select1." ";
	$result = mysql_query($sql, $link);
	while ($row = mysql_fetch_assoc($result)) {
			$title = $row['title'];
			$text = $row['text'];
			$date1 = $row['date1'];
			$active = $row['active'];
	}	
	
	



?>



<form action="newsup.php" method="post" >



<table align="center" width="450" bordercolor="#3C86BB" border="1" cellpadding="1" cellspacing="1">
<tr>
<td align="center">

<select onChange="selectch()" name="select1" id="select1">
  <option <?php echo $sel1; ?> value="1">Новость 1 </option>
  <option <?php echo $sel2; ?> value="2">Новость 2 </option>
  <option  <?php echo $sel3; ?> value="3">Новость 3  </option>
    <option  <?php echo $sel4; ?> value="4">Новость 4  </option>
</select>

</td>

</tr>

<tr height="40">
<td align="center" height="30">
Дата: <?php echo $date1; ?>
</td>
</tr>

<tr height="120">
<td align="center" height="120">
Название:
<textarea name="title" id=title style="width:98%;height:90%;text-align: center;"><?php echo $text; ?></textarea>
</td>
</tr>

<tr height="400">
<td align="center" height="400">
Текст:
<textarea name="text" id=text style="width:98%;height:90%;text-align: center;"><?php echo $text; ?></textarea>
</td>
</tr>


<tr>
<td align="center" >
Пароль:<input type="password" name="pswd"/>
</td>
</tr>

<tr>
<td align="center" >
<?php
$selected="";

if($active ==0){	
$selected="checked='checked' ";
}
?>
Не показывать:<input type="checkbox"    <?php echo $selected; ?> name="formWheelchair" value="Yes" />
</td>
</tr>



<tr height="40">
<td align="center">
<input type="submit" name="send" value="Сохранить"/>
</td>
</tr>
</table>

</form>

</body>
</html>