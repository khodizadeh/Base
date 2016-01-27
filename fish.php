<html>
<head>

<style type="text/css">
 .Daramad {position:absolute; left:570px;Width:190}
 .Gmostmar{position:absolute; left:380px;Width:190}  
 .Kosorat {position:absolute; left:190px;Width:190}
 .Vam	  {position:absolute; left:0px;Width:190}
</style>

</head>

<body>


<?php
function revEid($s){
	$p=strpos($s,"-");
	if (!$p) return $s;
	$t1=substr($s,0,$p);
	$t2=substr($s,$p+1);
	return $t2."-".$t1;
}

function (){
return 0;
}

function encode($n){
$val= mb_encode_numericentity("$n",array(128,9999,0,0xffff), "UTF-8");
return $val;

}


$ID=$_POST["ID"];
$AccNO=$_POST["AccNO"];

$mysql_host="localhost";
$mysql_user="cv_user";
$mysql_password="hamRAH65@:";
/*$mysql_user="root";
$mysql_password="";*/
$mysql_db="salary";
$link=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
mysql_select_db($mysql_db) or die(mysql_error());
mysql_query("SET CHARACTER SET utf8") or die(mysql_error());

$result=mysql_query("select * from  salary where EID='".revEid($ID) ."' and Hesab='".$AccNO."'");


$n=mysql_num_rows($result);

if ($n==0) { 
	echo "<h2 align=center>".".اطلاعات وارد شده صحيح نمي باشد"."</h2>";
	return;
}

for($i=0;$i<$n;$i++){
$row=mysql_fetch_array($result);

echo "<br><br>";
echo "<h2 align=center>"."فيش حقوق اساتيد و كاركنان دانشگاه تربيت معلم آذربايجان  در ".$row["Mah"]." ماه سال ".$row["Sal"]."</h2>";
echo "<table align=center border=0 >";
echo '<tr>';
echo "<td align=center colspan='2'>".$row["Karkard_Rooz"]."<b>:تعداد روز كاركرد</b>"."</td>" ;
echo "<td align=center colspan='2'>".$row["Hesab"]."<b>:شماره حساب</b>"."</td>" ;
echo "<td align=center colspan='2'>".$row["EID"]."<b>:كد پرسنلي</b>"."</td>" ;
echo "<td align=center colspan='2' >"."<b>نام:</b>".$row["FName"]." ".$row["LName"]."</td>" ;
echo '</tr>';



echo "<tr><td align='center' colspan='7'><b>"."<hr>"."</b></td></tr>";

//echo '</table>';





//echo "<div class='Vam'>";
echo "<tr><td valign=top>";
echo "<table >";
echo "<tr><td align='center' colspan='3'><b>"."اقساط و پس انداز"."</b></td></tr>";
echo "<tr><td align='center' colspan='3'><b>"."<hr>"."</b></td></tr>";
if ($row["Vam1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam1"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam1_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam2"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam2_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam3"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam3"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam3_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam4"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam4"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam4_Name"]."</b></td>";	
	echo '</tr>';
}


if ($row["Vam5"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam5"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam5_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam6"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam6"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam6_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam7"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam7"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam7_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Vam8"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam8"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam8_Name"]."</b></td>";	
	echo '</tr>';
}
if ($row["Vam9"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam9"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam9_Name"]."</b></td>";	
	echo '</tr>';
}
if ($row["Vam10"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Vam10"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Vam10_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Pas1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Pas1"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Pas1_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Pas2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Pas2"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Pas2_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Pas3"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Pas3"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Pas3_Name"]."</b></td>";	
	echo '</tr>';
}
if ($row["Pas4"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Pas4"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Pas4_Name"]."</b></td>";	
	echo '</tr>';
}

echo '</table>';

echo "</td>";
//echo "</div>";

/***********************************************************************************/
echo "<td>&nbsp&nbsp&nbsp</td>";
echo "<td valign=top>";
//echo "<div class='Kosorat'>";
echo "<table>";
echo "<tr><td align='center' colspan='3'><b>"."كسورات"."</b></td></tr>";
echo "<tr><td align='center' colspan='3'><b>"."<hr>"."</b></td></tr>";


if ($row["maliyat"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["maliyat"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":ماليات"."</b></td>";
	echo '</tr>';
}

if ($row["Bazneshat"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bazneshat"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بازنشستگي"."</b></td>";
	echo '</tr>';
}

if ($row["Geybat"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Geybat"]."</td>";	
	echo "<td align='right'>"."(".$row["Geybat_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":غيبت"."</b></td>";
	echo '</tr>';
}

if ($row["Takhir"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Takhir"]."</td>";	
	echo "<td align='right'>"."(".$row["Takhir_Saat"].")"."</td>";
	echo "<td align='right'><b>".":تاخير"."</b></td>";
	echo '</tr>';
}



if ($row["Bime_Omr"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bime_Omr"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بيمه عمر"."</b></td>";
	echo '</tr>';
}

if ($row["Bime_Darman"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bime_Darman"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بيمه درماني"."</b></td>";
	echo '</tr>';
}

if ($row["Bime_Grohi"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bime_Grohi"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بيمه گروهي"."</b></td>";
	echo '</tr>';
}

if ($row["Bime_Darman_Tabaei1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bime_Darman_Tabaei1"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بيمه تبعي1"."</b></td>";
	echo '</tr>';
}

if ($row["Bime_Darman_Tabaei2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Bime_Darman_Tabaei2"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":بيمه تبعي2"."</b></td>";
	echo '</tr>';
}



if ($row["Mogarari_Moavege"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mogarari_Moavege"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":مقرري معوقه"."</b></td>";
	echo '</tr>';
}

if ($row["Kosor1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor1"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor1_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor2"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor2_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor3"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor3"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor3_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor4"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor4"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor4_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor5"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor5"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor5_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor6"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor6"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor6_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor7"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor7"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor7_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor8"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor8"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor8_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor9"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor9"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor9_Name"]."</b></td>";	
	echo '</tr>';
}

if ($row["Kosor10"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Kosor10"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Kosor10_Name"]."</b></td>";	
	echo '</tr>';
}

echo '</table>';
echo '</td>';
echo "</div>";


/*****************************************************************************************/
echo "<td>&nbsp&nbsp&nbsp</td>";
//echo "<div class='Gmostmar'>";
echo "<td valign=top>";
echo "<table >";
echo "<tr><td border=1 align='center' colspan='3'><b>"."غير مستمر"."</b></td></tr>";
echo "<tr><td align='center' colspan='3'><b>"."<hr>"."</b></td></tr>";

if ($row["Mamoriat"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mamoriat"]."</td>";	
	echo "<td align='right'>"."(".$row["Mamoriat_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":ماموريت"."</b></td>";
	echo '</tr>';
}

if ($row["EZF"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["EZF"]."</td>";	
	echo "<td align='right'>"."(".$row["Ezafe_Saat"].")"."</td>";
	echo "<td align='right'><b>".":اضافه كار"."</b></td>";
	echo '</tr>';
}

if ($row["Shift"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Shift"]."</td>";	
	echo "<td align='right'>"."(".$row["ShiftKari_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":شيفتكاري"."</b></td>";
	echo '</tr>';
}

if ($row["Keshik"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Keshik"]."</td>";	
	echo "<td align='right'>"."(".$row["KeshikKari_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":كشيك كاري"."</b></td>";
	echo '</tr>';
}

if ($row["ShabKari"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["ShabKari"]."</td>";	
	echo "<td align='right'>"."(".$row["ShabKari_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":شبككاري"."</b></td>";
	echo '</tr>';
}

if ($row["TatilKari"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["TatilKari"]."</td>";	
	echo "<td align='right'>"."(".$row["TatilKari_Rooz"].")"."</td>";
	echo "<td align='right'><b>".":تعطيلكاري"."</b></td>";
	echo '</tr>';
}



if ($row["Eidi"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Eidi"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":عيدي"."</b></td>";
	echo '</tr>';
}

if ($row["Padash"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Padash"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":پاداش"."</b></td>";
	echo '</tr>';
}

if ($row["Moavege"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Moavege"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":معوقه"."</b></td>";
	echo '</tr>';
}

if ($row["Mogarrari"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mogarrari"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":مقرري"."</b></td>";
	echo '</tr>';
}
echo '</table>';
echo "</td>";


//echo "</div>";



/**************************************************************************/

//echo "<div class='Daramad'>";


echo "<td>&nbsp&nbsp&nbsp</td>";
echo "<td valign=top>";
echo "<table>";
echo "<tr><td border=1 align='center' colspan='3'><b>"."حقوق و مزايا"."</b></td></tr>";
echo "<tr><td align='center' colspan='3'><b>"."<hr>"."</b></td></tr>";

if ($row["Hogog_Paye"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Hogog_Paye"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":حقوق پايه"."</b></td>";
	echo '</tr>';
}

if ($row["Fog1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Fog1"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Fog1_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Fog2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Fog2"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Fog2_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Fog3"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Fog3"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Fog3_Name"]."</b></td>";
	echo '</tr>';
}



if ($row["Olad"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Olad"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":حق اولاد"."</b></td>";
	echo '</tr>';
}

if ($row["Aele"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Aele"]."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>".":عائله مندي"."</b></td>";
	echo '</tr>';
}




if ($row["Mazaya1"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya1"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya1_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya2"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya2"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya2_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya3"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya3"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya3_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya4"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya4"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya4_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya5"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya5"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya5_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya6"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya6"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya6_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya7"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya7"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya7_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya8"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya8"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya8_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya9"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya9"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya9_Name"]."</b></td>";
	echo '</tr>';
}

if ($row["Mazaya10"] <>0 ){
	echo "<tr>";
	echo "<td align='right'>".$row["Mazaya10"] ."</td>";	
	echo "<td align='right'>&nbsp&nbsp</td>";
	echo "<td align='right'><b>:".$row["Mazaya10_Name"]."</b></td>";
	echo '</tr>';
}
echo '</table>';
echo "</td></tr>";
//echo "</div>";	


/**************************************************************************/
echo "<tr><td align='center' colspan='7'><b>"."<hr>"."</b></td></tr>";


echo "<tr><td colspan='2'>".$row["Pardakhti"]."<b>:خالص پرداختي</b></td>";
echo "<td align='Center' colspan='3'>".$row["Kosorat"]."<b>:مجموع كسورات</b></td><td>&nbsp</td>";
echo "<td colspan='2'>".$row["Estehgagi"]."<b>:مجموع درآمد</b></td></tr>";

echo '</table>';





}





?>
</body>
</html>



