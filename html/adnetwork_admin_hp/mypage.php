<?php 
include("includes/connection.php");

if(isset($_POST['submit']))
{
	$commondb="commondb";
	$operator=$_POST['operator'];
	$product="glamour";
	$capping= $_POST['capping'];
	
	
	
	if($capping > 0)
	{
		$isactive=1;
	}
	elseif($capping < 0)
	{
		$capping="100";
		$isactive=0;
	}
	else
	{
		$capping="100";
		$isactive=0;
	}
	

	$tbl=$operator."_".$product."_counter_tbl";
		
	

	$select="select * from ".$commondb.".".$tbl.""; 
	$res=$conn->query($select);
	$num=$res->rowCount(); 
	if($num > 0)
	{
		$update="update ".$commondb.".".$tbl." set isactive = '".$isactive."',capping='".$capping."' where cntid = 1 "; 
		$res=$conn->query($update);
	}
	else
	{}
	
	

	
}

?>
<form method = "post">


Operator:
<select name="operator">
<option value="mtn">mtn</option>

<option value="dtac">DTAC</option>
<option value="ais">AIS</option>
<option value="vodacom">vodacom</option>
<option value="du">du</option>
<option value="dialog">dialog</option>
<option value="truemove">truemove</option>
<option value="tmobile">tmobile</option>
<option value="omanooredoo">omanooredoo</option>
<option value="xl">xl</option>
<option value="indosat">indosat - KSA Gamepub</option>
<option value="pktelenor">pktelenor</option>
<option value="greece">greece</option>
<option value="vodafonegreece">Vodafonegreece</option>
<option value="timwezain">Timwezain - KSA Gamebar</option>
<option value="timitaly">Timitaly - KSA Gamespot</option>
<option value="tri">tri - KSA Gamestation</option>
<option value="stcsa">StcSA</option>
<option value="kwzain">kwzain</option>
<option value="turkcell">turkcell</option>
<option value="kuwaitooredoo">kuwaitooredoo</option>
<option value="zong">PKZong</option>
<option value="telkomsel">Telkomsel</option>
<option value="zainjordon">Zain Jordan</option>
<option value="zainjordon">Zain Jordan</option>
<option value="ncell">ncell</option>
<option value="umobile">umobile</option>
<!-- 
<option value="qatarvodafone">qatarvodafone</option>
<option value="maxis">maxis</option>
<option value="bahrain">Bahrain</option>
<option value="etisalat">Etisalat</option>
<option value="telenorse">Sweden</option>
<option value="peruclaro">PeruClaro</option>
<option value="vodafoneczech">Vodafoneczech</option>
<option value="vodafoneghana">Vodafoneghana</option>
<option value="spainvodafone">spainvodafone</option>
<option value="swisscom">swisscom</option>
<option value="celcom">celcom</option>
<option value="vodafone">Vodafone</option>
<option value="airtel">Airtel</option>
<option value="idea">IDEA</option>
<option value="entel">Entel</option>

<option value="vodafoneireland">vodafoneireland</option>
<option value="asiacell">asiacell</option>
<option value="telcel">telcel</option>
<option value="umobile">umobile</option>

<option value="zainiraq">zainiraq</option>
<option value="h3g">h3g</option>
<option value="telenorse">telenorse</option>
<option value="orangetunisia">orangetunisia</option>
<option value="vodafoneuk">vodafoneuk</option>
<option value="egyptvodafone">egyptvodafone</option>
<option value="vodafonenl">vodafonenl</option>
<option value="wind">wind</option>
<option value="vodafoneitaly">vodafoneitaly</option>
<option value="nos">nos</option>
<option value="beeline">beeline</option>
<option value="myanmarooredoo">myanmarooredoo</option>
<option value="ncell">ncell</option>
<option value="life">life</option>
<option value="vodafonegermany">vodafonegermany</option>
<option value="mobilink">mobilink</option>
<option value="argentinamovistar">argentinamovistar</option>
<option value="robi">robi</option>
<option value="telenor">myanmartelenor</option>
<option value="myanmartelenor">myanmartelenor adntwk</option>
<option value="cellc">cellc</option>
<option value="viva">viva</option>
<option value="zain">zain</option>

<option value="kcell">kcell</option>
-->


</select>
<br/>
<br/>
Capping:
<input type="text" name="capping" >




<br/>
<br/>
<input type="submit" name="submit" value="submit">
</form>