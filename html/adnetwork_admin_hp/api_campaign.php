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

$sql_camp_ksa="select * from advertiserdb.api_blocking where country = 'ksa'";
$res_camp_ksa=$conn->query($sql_camp_ksa);
$row_camp_ksa=$res_camp_ksa->fetch();
$ksa=$row_camp_ksa['campaign'];

$sql_camp_uae="select * from advertiserdb.api_blocking where country = 'uae'";
$res_camp_uae=$conn->query($sql_camp_uae);
$row_camp_uae=$res_camp_uae->fetch();
$uae=$row_camp_uae['campaign'];

$sql_camp_ps="select * from advertiserdb.api_blocking where country = 'ps'";
$res_camp_ps=$conn->query($sql_camp_ps);
$row_camp_ps=$res_camp_ps->fetch();
$ps=$row_camp_ps['campaign'];

$sql_camp_iq="select * from advertiserdb.api_blocking where country = 'iq'";
$res_camp_iq=$conn->query($sql_camp_iq);
$row_camp_iq=$res_camp_iq->fetch();
$iq=$row_camp_iq['campaign'];

$sql_camp_qa="select * from advertiserdb.api_blocking where country = 'qa'";
$res_camp_qa=$conn->query($sql_camp_qa);
$row_camp_qa=$res_camp_qa->fetch();
$qa=$row_camp_qa['campaign'];

$sql_camp_kw="select * from advertiserdb.api_blocking where country = 'kw'";
$res_camp_kw=$conn->query($sql_camp_kw);
$row_camp_kw=$res_camp_kw->fetch();
$kw=$row_camp_kw['campaign'];

$sql_camp_pl="select * from advertiserdb.api_blocking where country = 'pl'";
$res_camp_pl=$conn->query($sql_camp_pl);
$row_camp_pl=$res_camp_pl->fetch();
$pl=$row_camp_pl['campaign'];


$sql_camp_et="select * from advertiserdb.api_blocking where country = 'et'";
$res_camp_et=$conn->query($sql_camp_et);
$row_camp_et=$res_camp_et->fetch();
$et=$row_camp_et['campaign'];


if(isset($_POST['submit']))
{
	$oman=$_POST['oman'];
	$ksa=$_POST['ksa'];
	$uae=$_POST['uae'];
	$ps=$_POST['ps'];
	$iq=$_POST['iq'];
	$qa=$_POST['qa'];
	$kw=$_POST['kw'];
	$pl=$_POST['pl'];
	$et=$_POST['et'];
	
	$update_om="UPDATE  advertiserdb.api_blocking SET campaign ='".$oman."' where country = 'oman'";
	$res_om=$conn->query($update_om); 
	
	$update_ksa="UPDATE  advertiserdb.api_blocking SET campaign ='".$ksa."' where country = 'ksa'";
	$res_ksa=$conn->query($update_ksa); 
	
	$update_uae="UPDATE  advertiserdb.api_blocking SET campaign ='".$uae."' where country = 'uae'";
	$res_uae=$conn->query($update_uae); 
	
	$update_ps="UPDATE  advertiserdb.api_blocking SET campaign ='".$ps."' where country = 'ps'";
	$res_ps=$conn->query($update_ps); 
	
	$update_iq="UPDATE  advertiserdb.api_blocking SET campaign ='".$iq."' where country = 'iq'";
	$res_iq=$conn->query($update_iq); 
	
	$update_qa="UPDATE  advertiserdb.api_blocking SET campaign ='".$qa."' where country = 'qa'";
	$res_qa=$conn->query($update_qa); 
	
		
	$update_kw="UPDATE  advertiserdb.api_blocking SET campaign ='".$kw."' where country = 'kw'";
	$res_kw=$conn->query($update_kw); 
	
		
	$update_pl="UPDATE  advertiserdb.api_blocking SET campaign ='".$pl."' where country = 'pl'";
	$res_pl=$conn->query($update_pl); 
	
	$update_et="UPDATE  advertiserdb.api_blocking SET campaign ='".$et."' where country = 'et'";
	$res_et=$conn->query($update_et); 
	
	echo "<script>window.location='api_campaign.php';</script>";
	
	


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
                    <h2>Add Campaign</h2>
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
									
									<input type="radio" name="oman"  value="airg" <?php if($oman == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="oman"  value="linkit" <?php if($oman == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="oman"  value="svmobi" <?php if($oman == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="oman"  value="11players" <?php if($oman == '11players'){ echo $checked="checked";} else{} ?>> 11players &nbsp;&nbsp;	
									<input type="radio" name="oman"  value="multirouting" <?php if($oman == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting &nbsp;&nbsp;	
									<input type="radio" name="oman" value="aisdigitech" <?php if($oman == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech &nbsp;&nbsp;	
									<input type="radio" name="oman" value="shemaroo" <?php if($oman == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo &nbsp;&nbsp;	
						
									<input type="radio" name="oman" value="clickandget" <?php if($oman == 'clickandget'){ echo $checked="checked";} else{} ?>> ClickAndGet &nbsp;&nbsp;	
									<input type="radio" name="oman" class="oman" value="in10media" <?php if($oman == 'in10media'){ echo $checked="checked";} else{} ?>> in10media  &nbsp;&nbsp;	
									<input type="radio" name="oman" class="oman" value="jovial" <?php if($oman == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial &nbsp;&nbsp;	
									<input type="radio" name="oman" class="oman" value="mpara" <?php if($oman == 'mpara'){ echo $checked="checked";} else{} ?>> Mpara &nbsp;&nbsp;	
									
								</div>
								
							</div>
						
						
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>KSA</strong>
								
								<input type="radio" name="ksa" value="airg" <?php if($ksa == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="ksa" value="linkit" <?php if($ksa == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="svmobi" <?php if($ksa == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI GS &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="svmobigpub" <?php if($ksa == 'svmobigpub'){ echo $checked="checked";} else{} ?>> SVMOBI GP &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="11players" <?php if($ksa == '11players'){ echo $checked="checked";} else{} ?>> 11players &nbsp;&nbsp;	
									<input type="radio" name="ksa" value="multirouting" <?php if($ksa == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="aisdigitech" <?php if($ksa == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech &nbsp;&nbsp;
									<input type="radio" name="ksa" value="jovial" <?php if($ksa == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial &nbsp;&nbsp;
									<input type="radio" name="ksa" value="100sports" <?php if($ksa == '100sports'){ echo $checked="checked";} else{} ?>> 100 Sports &nbsp;&nbsp;
									<input type="radio" name="ksa" value="amusedigi" <?php if($ksa == 'amusedigi'){ echo $checked="checked";} else{} ?>> AmuseDigi  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="playwing" <?php if($ksa == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="tricona" <?php if($ksa == 'tricona'){ echo $checked="checked";} else{} ?>> Tricona  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="mobimartech" <?php if($ksa == 'mobimartech'){ echo $checked="checked";} else{} ?>> MobimarTech  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="secondprofit" <?php if($ksa == 'secondprofit'){ echo $checked="checked";} else{} ?>> SecondProfit  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="mevish" <?php if($ksa == 'mevish'){ echo $checked="checked";} else{} ?>> Mevish  &nbsp;&nbsp;
									<input type="radio" name="ksa" value="shemaroo_new" <?php if($ksa == 'shemaroo_new'){ echo $checked="checked";} else{} ?>> Shemaroo New  &nbsp;&nbsp;
								</div>
								
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>UAE</strong>
									
									<input type="radio" name="uae" class="uae" value="airg" <?php if($uae == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="uae" class="uae" value="linkit" <?php if($uae == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="uae" class="uae" value="svmobi" <?php if($uae == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="uae" class="uae" value="multirouting" <?php if($uae == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  
									<input type="radio" name="uae" class="uae" value="aisdigitech" <?php if($uae == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech 
									<input type="radio" name="uae" class="uae" value="hungama" <?php if($uae == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama 
									<input type="radio" name="uae" class="uae" value="jovial" <?php if($uae == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial 
									<input type="radio" name="uae" class="uae" value="jovial2" <?php if($uae == 'jovial2'){ echo $checked="checked";} else{} ?>> Jovial2 
									<input type="radio" name="uae" class="uae" value="netmarble" <?php if($uae == 'netmarble'){ echo $checked="checked";} else{} ?>> NetMarble 
									<input type="radio" name="uae" class="uae" value="clickandget" <?php if($uae == 'clickandget'){ echo $checked="checked";} else{} ?>> ClickAndGet 
									<input type="radio" name="uae" class="uae" value="amusedigi" <?php if($uae == 'amusedigi'){ echo $checked="checked";} else{} ?>> AmuseDigi 
									<input type="radio" name="uae" class="uae" value="in10media" <?php if($uae == 'in10media'){ echo $checked="checked";} else{} ?>> in10media 
								</div>
								
							</div>
						
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>PS</strong>
									
									<input type="radio" name="ps" class="ps" value="airg" <?php if($ps == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="ps" class="ps" value="linkit" <?php if($ps == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="ps" class="ps" value="svmobi" <?php if($ps == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="ps" class="ps" value="multirouting" <?php if($ps == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  
									<input type="radio" name="ps" class="ps" value="aisdigitech" <?php if($ps == 'aisdigitech'){ echo $checked="checked";} else{} ?>> AIS Digitech 
									<input type="radio" name="ps" class="ps" value="netmarble" <?php if($ps == 'netmarble'){ echo $checked="checked";} else{} ?>> NetMarble 
									<input type="radio" name="ps"  value="shemaroo" <?php if($ps == 'shemaroo'){ echo $checked="checked";} else{} ?>> Shemaroo  &nbsp;&nbsp;
									<input type="radio" name="ps" class="ps" value="jovial" <?php if($ps == 'jovial'){ echo $checked="checked";} else{} ?>> Jovial 
									<input type="radio" name="ps" class="ps" value="100sportstv" <?php if($ps == '100sportstv'){ echo $checked="checked";} else{} ?>> 100sportstv 
								</div>
								
							</div>
						
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>IQ</strong>
									
									<input type="radio" name="iq" class="iq" value="airg" <?php if($iq == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
									<input type="radio" name="iq" class="iq" value="linkit" <?php if($iq == 'linkit'){ echo $checked="checked";} else{} ?>> LinkIT &nbsp;&nbsp;	
									<input type="radio" name="iq" class="iq" value="svmobi" <?php if($iq == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="iq" class="iq" value="multirouting" <?php if($iq == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  
									<input type="radio" name="iq" class="iq" value="multirouting" <?php if($iq == 'multirouting'){ echo $checked="checked";} else{} ?>> Multirouting  
									
								</div>
								
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>QA</strong>
									
									<input type="radio" name="qa" class="qa" value="airg" <?php if($qa == 'airg'){ echo $checked="checked";} else{} ?>> AirG	&nbsp;&nbsp;	
								
									<input type="radio" name="qa" class="qa" value="svmobi" <?php if($qa == 'svmobi'){ echo $checked="checked";} else{} ?>> SVMOBI &nbsp;&nbsp;	
									<input type="radio" name="qa" class="qa" value="hungama" <?php if($qa == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama &nbsp;&nbsp;	
									
									
								</div>
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>Kuwait</strong>
									
									<input type="radio" name="kw" class="kw" value="hungama" <?php if($kw == 'hungama'){ echo $checked="checked";} else{} ?>> Hungama	&nbsp;&nbsp;	

								</div>
								
							</div>
							
							<div class="x_content">
								<div class="col-md-12 col-sm-2 col-xs-12 form-group has-feedback"> <strong>Poland</strong>
								
									<input type="radio" name="pl"  value="100sports" <?php if($pl == '100sports'){ echo $checked="checked";} else{} ?>> 100 Sports &nbsp;&nbsp;
									<input type="radio" name="pl"  value="playwing" <?php if($pl == 'playwing'){ echo $checked="checked";} else{} ?>> PlayWing &nbsp;&nbsp;
									<input type="radio" name="pl"  value="playwing_mind" <?php if($pl == 'playwing_mind'){ echo $checked="checked";} else{} ?>> PlayWing Mind &nbsp;&nbsp;
									
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

