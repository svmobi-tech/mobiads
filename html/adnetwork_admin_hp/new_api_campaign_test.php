<?php
error_reporting(0);
include("includes/check_session.php");
include("includes/connection1.php");
include("../includes/language.php");

$count=0;


$sql_camp_om="select * from advertiserdb.api_blocking where country = 'oman'";
$res_camp_om=$conn->query($sql_camp_om);
$row_camp_om=$res_camp_om->fetch();
$oman=$row_camp_om['campaign']; 
$oman_new=$row_camp_om['new_campaign']; 

$sql_camp_ksa="select * from advertiserdb.api_blocking where country = 'ksa'";
$res_camp_ksa=$conn->query($sql_camp_ksa);
$row_camp_ksa=$res_camp_ksa->fetch();
$ksa=$row_camp_ksa['campaign'];
$ksa_new=$row_camp_ksa['new_campaign'];

$sql_camp_uae="select * from advertiserdb.api_blocking where country = 'uae'";
$res_camp_uae=$conn->query($sql_camp_uae);
$row_camp_uae=$res_camp_uae->fetch();
$uae=$row_camp_uae['campaign'];
$uae_new=$row_camp_uae['new_campaign'];


$sql_camp_ps="select * from advertiserdb.api_blocking where country = 'ps'";
$res_camp_ps=$conn->query($sql_camp_ps);
$row_camp_ps=$res_camp_ps->fetch();
$ps=$row_camp_ps['campaign'];
$ps_new=$row_camp_ps['new_campaign'];



$sql_camp_qa="select * from advertiserdb.api_blocking where country = 'qa'";
$res_camp_qa=$conn->query($sql_camp_qa);
$row_camp_qa=$res_camp_qa->fetch();
$qa=$row_camp_qa['campaign'];
$qa_new=$row_camp_qa['new_campaign'];

$sql_camp_kw="select * from advertiserdb.api_blocking where country = 'kw'";
$res_camp_kw=$conn->query($sql_camp_kw);
$row_camp_kw=$res_camp_kw->fetch();
$kw=$row_camp_kw['campaign'];
$kw_new=$row_camp_kw['new_campaign']; 

$sql_camp_pl="select * from advertiserdb.api_blocking where country = 'pl'";
$res_camp_pl=$conn->query($sql_camp_pl);
$row_camp_pl=$res_camp_pl->fetch();
$pl=$row_camp_pl['campaign'];
$pl_new=$row_camp_pl['new_campaign'];

$sql_camp_iq="select * from advertiserdb.api_blocking where country = 'iq'";
$res_camp_iq=$conn->query($sql_camp_iq);
$row_camp_iq=$res_camp_iq->fetch();
$iq=$row_camp_iq['campaign'];
$iq_new=$row_camp_iq['new_campaign'];


$sql_camp_bh="select * from advertiserdb.api_blocking where country = 'bh'";
$res_camp_bh=$conn->query($sql_camp_bh);
$row_camp_bh=$res_camp_bh->fetch();
$bh=$row_camp_bh['campaign'];


$sql_camp_et="select * from advertiserdb.api_blocking where country = 'et'";
$res_camp_et=$conn->query($sql_camp_et);
$row_camp_et=$res_camp_et->fetch();
$et=$row_camp_et['campaign'];

if(isset($_POST['submit']))
{
	$oman=$_POST['oman'];
	$oman_new=$_POST['oman_new'];
	
	$ksa=$_POST['ksa'];
	$ksa_new=$_POST['ksa_new'];
	
	$uae=$_POST['uae'];
	$uae_new=$_POST['uae_new'];
	
	$pl=$_POST['pl'];
	$pl_new=$_POST['pl_new'];
	
	$ps=$_POST['ps'];
	$ps_new=$_POST['ps_new'];
	
	$iq=$_POST['iq'];
	$iq_new=$_POST['iq_new'];
	
	$qa=$_POST['qa'];
	$qa_new=$_POST['qa_new'];
	
	$kw=$_POST['kw'];
	$kw_new=$_POST['kw_new'];
	
	$et=$_POST['et'];
	
	
	
	$bh=$_POST['bh'];
	
	$update_om="UPDATE  advertiserdb.api_blocking SET campaign ='".$oman."', new_campaign = '".$oman_new."' where country = 'oman'";
	$res_om=$conn->query($update_om); 
	
	$update_ksa="UPDATE  advertiserdb.api_blocking SET campaign ='".$ksa."', new_campaign = '".$ksa_new."'  where country = 'ksa'";
	$res_ksa=$conn->query($update_ksa); 
	
	$update_uae="UPDATE  advertiserdb.api_blocking SET campaign ='".$uae."', new_campaign = '".$uae_new."' where country = 'uae'";
	$res_uae=$conn->query($update_uae); 
	
	$update_ps="UPDATE  advertiserdb.api_blocking SET campaign ='".$ps."', new_campaign = '".$ps_new."' where country = 'ps'";
	$res_ps=$conn->query($update_ps); 
	
	$update_iq="UPDATE  advertiserdb.api_blocking SET campaign ='".$iq."', new_campaign = '".$iq_new."' where country = 'iq'";
	$res_iq=$conn->query($update_iq); 
	
	$update_qa="UPDATE  advertiserdb.api_blocking SET campaign ='".$qa."', new_campaign = '".$qa_new."'  where country = 'qa'";
	$res_qa=$conn->query($update_qa); 
	
		
	$update_kw="UPDATE  advertiserdb.api_blocking SET campaign ='".$kw."', new_campaign = '".$kw_new."' where country = 'kw'";
	$res_kw=$conn->query($update_kw); 
	
		
	$update_pl="UPDATE  advertiserdb.api_blocking SET campaign ='".$pl."', new_campaign = '".$pl_new."' where country = 'pl'";
	$res_pl=$conn->query($update_pl); 
	
	$update_bh="UPDATE  advertiserdb.api_blocking SET campaign ='".$bh."' where country = 'bh'";
	$res_bh=$conn->query($update_bh); 
	
	$update_et="UPDATE  advertiserdb.api_blocking SET campaign ='".$et."' where country = 'et'";
	$res_et=$conn->query($update_et); 
	
	echo "<script>window.location='new_api_campaign.php';</script>";
	
	


}


	


?>

		<?php include("includes/header.php"); ?>
		<?php include("includes/sidebar.php"); ?>
		<?php include("includes/top_navigation.php"); ?>
            
			

        <!-- page content -->
        <div class="right_col" role="main" >
          <div class="footer_down">

            
            

            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>API Campaign</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="post">
					
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>OMAN</strong>
								</br>
									<input type="radio" name="oman"  value="BlockAll" <?php if($oman == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;
									<input type="radio" name="oman"  value="airg" <?php if($oman == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;										
									<input type="radio" name="oman"  value="svmobi" <?php if($oman == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;		
									<input type="radio" name="oman"  value="11players" <?php if($oman == '11players'){ echo $checked="checked";} else{} ?>> 11players &nbsp;&nbsp;		
									<input type="radio" name="oman" value="shemaroo" <?php if($oman == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo &nbsp;&nbsp;
									<input type="radio" name="oman"  value="100sports" <?php if($oman == '100sports'){ echo $checked="checked";} else{} ?>> 100Sports  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="playwing" <?php if($oman == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="jovial" <?php if($oman == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial  &nbsp;&nbsp;
									
									<input type="radio" name="oman"  value="netmarble" <?php if($oman == 'netmarble'){ echo $checked="checked";} else{} ?>> Netmarble  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="taqniyat" <?php if($oman == 'taqniyat'){ echo $checked="checked";} else{} ?>> TaqniyatTech  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="taqniyat2" <?php if($oman == 'taqniyat2'){ echo $checked="checked";} else{} ?>> TaqniyatTech 2  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="techfusion" <?php if($oman == 'techfusion'){ echo $checked="checked";} else{} ?>> TechFusion  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="topborder" <?php if($oman == 'topborder'){ echo $checked="checked";} else{} ?>> Top Border  &nbsp;&nbsp;
									<input type="radio" name="oman" value="innomovilmjx" <?php if($oman == 'innomovilmjx'){ echo $checked="checked";} else{} ?>> InnomovilMJX &nbsp;&nbsp;
									<input type="radio" name="oman" value="arshiya" <?php if($oman == 'arshiya'){ echo $checked="checked";} else{} ?>> Arshiya &nbsp;&nbsp;
									<input type="radio" name="oman" value="innovera" <?php if($oman == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera &nbsp;&nbsp;
									<input type="radio" name="oman" value="organikmedia" <?php if($oman == 'organikmedia'){ echo $checked="checked";} else{} ?>> OrganikMedia &nbsp;&nbsp;
									<input type="radio" name="oman" value="mobimartech" <?php if($oman == 'mobimartech'){ echo $checked="checked";} else{} ?>> MobimarTech &nbsp;&nbsp;
									
									<!--<input type="radio" name="oman"  value="forest" <?php if($oman == 'forest'){ echo $checked="checked";} else{} ?>> Forest  &nbsp;&nbsp;
									
									<input type="radio" name="oman"  value="linkit" <?php if($oman == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="oman"  value="multirouting" <?php if($oman == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  &nbsp;&nbsp;
									<input type="radio" name="oman" value="aisdigitech" <?php if($oman == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech &nbsp;&nbsp;
									<input type="radio" name="oman" value="clickandget" <?php if($oman == 'clickandget'){ echo $checked="checked";} else{} ?>> ClickAndGet &nbsp;&nbsp;
									<input type="radio" name="oman"  value="in10media" <?php if($oman == 'in10media'){ echo $checked="checked";} else{} ?>> in10media  &nbsp;&nbsp;
									<input type="radio" name="oman"  value="mpara" <?php if($oman == 'mpara'){ echo $checked="checked";} else{} ?>> Mpara  &nbsp;&nbsp; -->
									</br>
									</br>
									 
									
									<input type="radio" name="oman_new"  value="mastertrack_new" <?php if($oman_new == 'mastertrack_new'){ echo $checked="checked";} else{} ?>> MasterTrack New &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="mastertrack2_new" <?php if($oman_new == 'mastertrack2_new'){ echo $checked="checked";} else{} ?>> MasterTrack2 New  &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="fame_new" <?php if($oman_new == 'fame_new'){ echo $checked="checked";} else{} ?>> Fame New &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="puretech_new" <?php if($oman_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech New &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="wings_new" <?php if($oman_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="wings029_new" <?php if($oman_new == 'wings029_new'){ echo $checked="checked";} else{} ?>> Wings029 New &nbsp;&nbsp;
								
									<input type="radio" name="oman_new"  value="playwing_new" <?php if($oman_new == 'playwing_new'){ echo $checked="checked";} else{} ?>> Playwing New &nbsp;&nbsp;
									<input type="radio" name="oman_new"  value="mmt_new" <?php if($oman_new == 'mmt_new'){ echo $checked="checked";} else{} ?>> MMT New &nbsp;&nbsp;
										<input type="radio" name="oman_new" value="mobimartech_new" <?php if($oman_new == 'mobimartech_new'){ echo $checked="checked";} else{} ?>> MobimarTech New &nbsp;&nbsp;
									
									
								</div>
								
							</div>
						 </br></br>	
						
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>KSA</strong>
								</br>
								
									<input type="radio" name="ksa" value="BlockAll" <?php if($ksa == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;
									<input type="radio" name="ksa" value="airg" <?php if($ksa == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									
									<input type="radio" name="ksa" value="svmobi" <?php if($ksa == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI GS &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="svmobigpub" <?php if($ksa == 'svmobigpub'){ echo $checked="checked";} else{} ?>> SVMOBI GP &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="11players" <?php if($ksa == '11players'){ echo $checked="checked";} else{} ?>> 11players &nbsp;&nbsp;	
									
									<input type="radio" name="ksa" value="jovial" <?php if($ksa == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial &nbsp;&nbsp;
									<input type="radio" name="ksa" value="100sports" <?php if($ksa == '100sports'){ echo $checked="checked";} else{} ?>> 100 Sports &nbsp;&nbsp;
								
									<input type="radio" name="ksa" value="playwing" <?php if($ksa == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing  &nbsp;&nbsp;
									
								
									<input type="radio" name="ksa" value="secondprofit" <?php if($ksa == 'secondprofit'){ echo $checked="checked";} else{} ?>> SecondProfit  &nbsp;&nbsp;
							
									<input type="radio" name="ksa" value="shemaroo" <?php if($ksa == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="shemaroo2" <?php if($ksa == 'shemaroo2'){ echo $checked="checked";} else{} ?>> Shemaroo 2  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="viyugames" <?php if($ksa == 'viyugames'){ echo $checked="checked";} else{} ?>> ViyuGames  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="techfusion" <?php if($ksa == 'techfusion'){ echo $checked="checked";} else{} ?>> TechFusion  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="innovera" <?php if($ksa == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="arshiya" <?php if($ksa == 'arshiya'){ echo $checked="checked";} else{} ?>> Arshiya  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="innovera" <?php if($ksa == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera &nbsp;&nbsp;
									<input type="radio" name="ksa" value="mobimartech" <?php if($ksa == 'mobimartech'){ echo $checked="checked";} else{} ?>> MobimarTech  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="mobilyarabia" <?php if($ksa == 'mobilyarabia'){ echo $checked="checked";} else{} ?>> MobilyArabia  &nbsp;&nbsp;
									
									<!--<input type="radio" name="ksa" value="linkit" <?php if($ksa == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="amusedigi" <?php if($ksa == 'amusedigi'){ echo $checked="checked";} else{} ?>> AmuseDigi  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="tricona" <?php if($ksa == 'tricona'){ echo $checked="checked";} else{} ?>> Tricona  &nbsp;&nbsp;
									
									<input type="radio" name="ksa" value="mevish" <?php if($ksa == 'mevish'){ echo $checked="checked";} else{} ?>> Mevish  &nbsp;&nbsp; -->
									</br>
									</br>
									
									
									 
									
									<input type="radio" name="ksa_new"  value="mastertrack_new" <?php if($ksa_new == 'mastertrack_new'){ echo $checked="checked";} else{} ?>> MasterTrack New 
									<input type="radio" name="ksa_new"  value="fame_new" <?php if($ksa_new == 'fame_new'){ echo $checked="checked";} else{} ?>> Fame New 
									<input type="radio" name="ksa_new"  value="puretech_new" <?php if($ksa_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech New &nbsp;&nbsp;
									<input type="radio" name="ksa_new"  value="wings_new" <?php if($ksa_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New &nbsp;&nbsp;
									<input type="radio" name="ksa_new"  value="wings439_new" <?php if($ksa_new == 'wings439_new'){ echo $checked="checked";} else{} ?>> Wings439 New &nbsp;&nbsp;
									<input type="radio" name="ksa_new"  value="mobilyarabia_new" <?php if($ksa_new == 'mobilyarabia_new'){ echo $checked="checked";} else{} ?>> MobilyArabia New &nbsp;&nbsp;
								
								
									<input type="radio" name="ksa_new" value="mobimartech_new" <?php if($ksa_new == 'mobimartech_new'){ echo $checked="checked";} else{} ?>> MobimarTech New &nbsp;&nbsp;
									
								</div>
								
							</div>
							</br></br>	
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>UAE</strong>
								</br>
								
								<input type="radio" name="uae"  value="BlockAll" <?php if($uae == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;	
									
									<input type="radio" name="uae"  value="airg" <?php if($uae == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									
									<input type="radio" name="uae"  value="svmobi" <?php if($uae == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
						
									<input type="radio" name="uae"  value="jovial" <?php if($uae == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial &nbsp;&nbsp;
									<input type="radio" name="uae"  value="jovial2" <?php if($uae == 'jovial2'){ echo $checked="checked";} else{} ?>> Jovial2 &nbsp;&nbsp;
									<input type="radio" name="uae"  value="netmarble" <?php if($uae == 'netmarble'){ echo $checked="checked";} else{} ?>> NetMarble &nbsp;&nbsp;
									<input type="radio" name="uae"  value="topborder" <?php if($uae == 'topborder'){ echo $checked="checked";} else{} ?>> Top Border  &nbsp;&nbsp;
									
									<input type="radio" name="uae" value="playwing" <?php if($uae == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing  &nbsp;&nbsp;
									<input type="radio" name="uae" value="mediaxo" <?php if($uae == 'mediaxo'){ echo $checked="checked";} else{} ?>> MediaXO  &nbsp;&nbsp;
									<input type="radio" name="uae" value="viyugames" <?php if($uae == 'viyugames'){ echo $checked="checked";} else{} ?>> ViyuGames  &nbsp;&nbsp;
									<input type="radio" name="uae" value="techfusion" <?php if($uae == 'techfusion'){ echo $checked="checked";} else{} ?>> TechFusion  &nbsp;&nbsp;
									<input type="radio" name="uae" value="techfusion_mt" <?php if($uae == 'techfusion_mt'){ echo $checked="checked";} else{} ?>> TechFusion MT &nbsp;&nbsp;
									<input type="radio" name="uae" value="shemaroo" <?php if($uae == 'shemaroo'){ echo $checked="checked";} else{} ?>> shemaroo &nbsp;&nbsp;
									<input type="radio" name="uae" value="innomovilmjx" <?php if($uae == 'innomovilmjx'){ echo $checked="checked";} else{} ?>> InnomovilMJX &nbsp;&nbsp;
									<input type="radio" name="uae" value="innovera" <?php if($uae == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera &nbsp;&nbsp;
									<input type="radio" name="uae" value="jam" <?php if($uae == 'jam'){ echo $checked="checked";} else{} ?>> JAM &nbsp;&nbsp;
									<input type="radio" name="uae" value="netmedia" <?php if($uae == 'netmedia'){ echo $checked="checked";} else{} ?>> NetMedia &nbsp;&nbsp;
									<input type="radio" name="uae" value="numero" <?php if($uae == 'numero'){ echo $checked="checked";} else{} ?>> Numero &nbsp;&nbsp;
									
								<!--	<input type="radio" name="uae"  value="clickandget" <?php if($uae == 'clickandget'){ echo $checked="checked";} else{} ?>> ClickAndGet &nbsp;&nbsp;
									<input type="radio" name="uae"  value="amusedigi" <?php if($uae == 'amusedigi'){ echo $checked="checked";} else{} ?>> AmuseDigi &nbsp;&nbsp;
									<input type="radio" name="uae"  value="in10media" <?php if($uae == 'in10media'){ echo $checked="checked";} else{} ?>> in10media &nbsp;&nbsp;
									
									<input type="radio" name="uae"  value="linkit" <?php if($uae == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="uae"  value="multirouting" <?php if($uae == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  &nbsp;&nbsp;
									<input type="radio" name="uae"  value="aisdigitech" <?php if($uae == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech &nbsp;&nbsp;
									<input type="radio" name="uae"  value="hungama" <?php if($uae == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama &nbsp;&nbsp; -->
									
									</br></br>
									
									
									<input type="radio" name="uae_new"  value="netmarble_new" <?php if($uae_new == 'netmarble_new'){ echo $checked="checked";} else{} ?>> NetMarble New &nbsp;&nbsp;
									
									<input type="radio" name="uae_new"  value="mastertrack_new" <?php if($uae_new == 'mastertrack_new'){ echo $checked="checked";} else{} ?>> MasterTrack New &nbsp;&nbsp;
									<input type="radio" name="uae_new"  value="fame_new" <?php if($uae_new == 'fame_new'){ echo $checked="checked";} else{} ?>> Fame New &nbsp;&nbsp;
								
									<input type="radio" name="uae_new"  value="wings_new" <?php if($uae_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New &nbsp;&nbsp;
									<input type="radio" name="uae_new"  value="wings357_new" <?php if($uae_new == 'wings357_new'){ echo $checked="checked";} else{} ?>> Wings357 New &nbsp;&nbsp;
									<input type="radio" name="uae_new"  value="puretech_new" <?php if($uae_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech New &nbsp;&nbsp;
								
									<input type="radio" name="uae_new"  value="ehyper_new" <?php if($uae_new == 'ehyper_new'){ echo $checked="checked";} else{} ?>> EHyper New &nbsp;&nbsp;
									
									
								</div>
								
							</div>
							</br></br>		
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>PS</strong>
								</br>
									
									<input type="radio" name="ps"  value="BlockAll" <?php if($ps == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;
									<input type="radio" name="ps"  value="airg" <?php if($ps == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									
									<input type="radio" name="ps"  value="svmobi" <?php if($ps == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									
									<input type="radio" name="ps"  value="netmarble" <?php if($ps == 'netmarble'){ echo $checked="checked";} else{} ?>> NetMarble  &nbsp;&nbsp;
									<input type="radio" name="ps"  value="shemaroo" <?php if($ps == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo  &nbsp;&nbsp;
									<input type="radio" name="ps"  value="jovial" <?php if($ps == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial  &nbsp;&nbsp;
									<input type="radio" name="ps"  value="topborder" <?php if($ps == 'topborder'){ echo $checked="checked";} else{} ?>> Top Border  &nbsp;&nbsp;
									<input type="radio" name="ps"  value="100sportstv" <?php if($ps == '100sportstv'){ echo $checked="checked";} else{} ?>> 100sportstv  &nbsp;&nbsp;
									<input type="radio" name="ps"  value="playwingkiosk" <?php if($ps == 'playwingkiosk'){ echo $checked="checked";} else{} ?>> PlaywingKiosk  &nbsp;&nbsp;
									
									<!--<input type="radio" name="ps"  value="linkit" <?php if($ps == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="ps"  value="multirouting" <?php if($ps == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting   &nbsp;&nbsp;
									<input type="radio" name="ps"  value="aisdigitech" <?php if($ps == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech  &nbsp;&nbsp; -->
										</br></br>
									<input type="radio" name="ps_new"  value="100sportstv_new" <?php if($ps_new == '100sportstv_new'){ echo $checked="checked";} else{} ?>> 100sportstv New &nbsp;&nbsp;
								</div>
								
							</div>
							</br></br>	
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>IQ</strong>
								</br>
									
									<input type="radio" name="iq"  value="BlockAll" <?php if($iq == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;
									<input type="radio" name="iq"  value="airg" <?php if($iq == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="iq"  value="svmobi" <?php if($iq == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="iq"  value="taqniyat" <?php if($iq == 'taqniyat'){ echo $checked="checked";} else{} ?>> Taqniyat &nbsp;&nbsp;	
								<!--	<input type="radio" name="iq"  value="mehuliq" <?php if($iq == 'mehuliq'){ echo $checked="checked";} else{} ?>> Mehul IQ &nbsp;&nbsp;	-->
									<input type="radio" name="iq" value="innomovilmjx" <?php if($iq == 'innomovilmjx'){ echo $checked="checked";} else{} ?>> InnomovilMJX &nbsp;&nbsp;
									<input type="radio" name="iq" value="secondprofit" <?php if($iq == 'secondprofit'){ echo $checked="checked";} else{} ?>> SecondProfit &nbsp;&nbsp;
									<input type="radio" name="iq" value="grand" <?php if($iq == 'grand'){ echo $checked="checked";} else{} ?>> GrandTechno &nbsp;&nbsp;
									<input type="radio" name="iq" value="innovera" <?php if($iq == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera &nbsp;&nbsp;
									<input type="radio" name="iq" value="netmedia" <?php if($iq == 'netmedia'){ echo $checked="checked";} else{} ?>> NetMedia &nbsp;&nbsp;
									
									</br>
									</br>
									<input type="radio" name="iq_new"  value="wings_new" <?php if($iq_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New 
									<input type="radio" name="iq_new"  value="wings736_new" <?php if($iq_new == 'wings736_new'){ echo $checked="checked";} else{} ?>> Wings736 New 
							
									<input type="radio" name="iq_new"  value="fame_new" <?php if($iq_new == 'fame_new'){ echo $checked="checked";} else{} ?>> Fame New 
									<input type="radio" name="iq_new"  value="puretech_new" <?php if($iq_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech New 
									<input type="radio" name="iq_new"  value="mastertrack_new" <?php if($iq_new == 'mastertrack_new'){ echo $checked="checked";} else{} ?>> MasterTrack New 
										
									
									
									
								</div>
								
							</div>
							</br></br>	
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>QA</strong>
								</br>
									
									<input type="radio" name="qa"  value="BlockAll" <?php if($qa == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;	
									<input type="radio" name="qa"  value="airg" <?php if($qa == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
								
									<input type="radio" name="qa"  value="svmobi" <?php if($qa == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="qa"  value="svmobicontest" <?php if($qa == 'svmobicontest'){ echo $checked="checked";} else{} ?>> SVMOBI-Contest &nbsp;&nbsp;	
									<input type="radio" name="qa"  value="hungama" <?php if($qa == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama &nbsp;&nbsp;	
									<input type="radio" name="qa"  value="shemaroo" <?php if($qa == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo &nbsp;&nbsp;	
									<input type="radio" name="qa"  value="innovera" <?php if($qa == 'innovera'){ echo $checked="checked";} else{} ?>> Innovera &nbsp;&nbsp;	
									<input type="radio" name="qa"  value="jam" <?php if($qa == 'jam'){ echo $checked="checked";} else{} ?>> JAM &nbsp;&nbsp;	
									
									</br>
									</br>
									
									<input type="radio" name="qa_new"  value="puretech_new" <?php if($qa_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech &nbsp;&nbsp;	
									<input type="radio" name="qa_new"  value="wings936_new" <?php if($qa_new == 'wings936_new'){ echo $checked="checked";} else{} ?>> Wing936 &nbsp;&nbsp;
									
								</div>
							</div>
							</br></br>	
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>Kuwait</strong>
								</br>
									
									<input type="radio" name="kw"  value="BlockAll" <?php if($kw == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll	&nbsp;&nbsp;	
									<input type="radio" name="kw"  value="hungama" <?php if($kw == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama	&nbsp;&nbsp;	
									<input type="radio" name="kw"  value="svmobi" <?php if($kw == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI	&nbsp;&nbsp;	
									
									</br>
									</br>
									
									<input type="radio" name="kw_new"  value="sm_new" <?php if($kw_new == 'sm_new'){ echo $checked="checked";} else{} ?>> SM New &nbsp;&nbsp;
									<input type="radio" name="kw_new"  value="puretech_new" <?php if($kw_new == 'puretech_new'){ echo $checked="checked";} else{} ?>> PureTech New &nbsp;&nbsp;
									<input type="radio" name="kw_new"  value="wings_new" <?php if($kw_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New &nbsp;&nbsp;

								</div>
								
							</div>
							</br></br>	
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>Poland</strong>
								</br>
								
									<input type="radio" name="pl"  value="BlockAll" <?php if($pl == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll &nbsp;&nbsp;
									<input type="radio" name="pl"  value="100sports" <?php if($pl == '100sports'){ echo $checked="checked";} else{} ?>> 100Sports-Celeb &nbsp;&nbsp;
									<input type="radio" name="pl"  value="100sports2" <?php if($pl == '100sports2'){ echo $checked="checked";} else{} ?>> 100sports2-100sportTV &nbsp;&nbsp;
									<input type="radio" name="pl"  value="100sportspv" <?php if($pl == '100sportspv'){ echo $checked="checked";} else{} ?>> 100sportspv-ForwardTV &nbsp;&nbsp;
									<input type="radio" name="pl"  value="100sportspv2" <?php if($pl == '100sportspv2'){ echo $checked="checked";} else{} ?>> 100sportspv2-LearnEnglish  &nbsp;&nbsp;
							
									<input type="radio" name="pl"  value="playwing" <?php if($pl == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing &nbsp;&nbsp;
									<input type="radio" name="pl"  value="playwing_mind" <?php if($pl == 'playwing_mind'){ echo $checked="checked";} else{} ?>> PlayWing Mind &nbsp;&nbsp;
									<input type="radio" name="pl"  value="mediadigital" <?php if($pl == 'mediadigital'){ echo $checked="checked";} else{} ?>> MediaDigital &nbsp;&nbsp;
									</br>
									</br>
									<input type="radio" name="pl_new"  value="ehyper_new" <?php if($pl_new == 'ehyper_new'){ echo $checked="checked";} else{} ?>> EHyper New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="wings_new" <?php if($pl_new == 'wings_new'){ echo $checked="checked";} else{} ?>> Wings New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="playwing_mind_new" <?php if($pl_new == 'playwing_mind_new'){ echo $checked="checked";} else{} ?>> PlayWing Mind New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="playwing_new" <?php if($pl_new == 'playwing_new'){ echo $checked="checked";} else{} ?>> PlayWing New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="100sportspv_new" <?php if($pl_new == '100sportspv_new'){ echo $checked="checked";} else{} ?>> 100Sports PV New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="100sportspv2_new" <?php if($pl_new == '100sportspv2_new'){ echo $checked="checked";} else{} ?>> 100Sports PV2 New &nbsp;&nbsp;
									<input type="radio" name="pl_new"  value="mediadigital_new" <?php if($pl_new == 'mediadigital_new'){ echo $checked="checked";} else{} ?>> MediaDigital New &nbsp;&nbsp;
								</div>
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>BH</strong>
								</br>
								
									<input type="radio" name="bh"  value="svmobi" <?php if($bh == 'svmobi'){ echo $checked="checked";} else{} ?>>SVMOBI &nbsp;&nbsp;
									
									
								</div>
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>ET</strong>
								</br>
								
									<input type="radio" name="et"  value="BlockAll" <?php if($et == 'BlockAll'){ echo $checked="checked";} else{} ?>> BlockAll &nbsp;&nbsp;
									<input type="radio" name="et"  value="peace" <?php if($et == 'peace'){ echo $checked="checked";} else{} ?>> Peace &nbsp;&nbsp;
								
									
								</div>
							</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						 
						  <button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
                      
					</div>
                    </form>
                  </div>
                </div>
				
              
              </div>
            </div>
			
			<!-- /page content -->

       <?php
	   include("includes/footer.php");
		?>

