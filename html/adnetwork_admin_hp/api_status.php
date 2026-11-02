<?php

include("includes/connection1.php");

error_reporting(0);



$country='';
$msisdn='';

if(isset($_POST['submit']))
{

	$count=1; 


	
	$country=$_POST['country'];
	$partner=$_POST['partner'];
	$msisdn=$_POST['msisdn'];
	$action=$_POST['action']; 
	$startdate=date('Y-m-d',strtotime($_POST['start_date']))." 00:00:00";  
	$enddate=date('Y-m-d',strtotime($_POST['end_date']))." 23:59:59";
	
	if($country == 'Oman')
	{
		$db="fashionbardb_airg_om";
	}
	elseif($country == 'QA')
	{
		$db="fashionbardb_airg_qa";
	}
	elseif($country == 'KSA')
	{
		$db="fashionbardb_airg_sa";
	}
	elseif($country == 'KW')
	{
		$db="fashionbardb_airg_kw";
	}
	elseif($country == 'IQ')
	{
		$db="fashionbardb_airg_iq";
	}
	elseif($country == 'UAE')
	{
		$db="fashionbardb_airg_ae";
	}
	elseif($country == 'PS')
	{
		$db="fashionbardb_airg_ps";
	}
	elseif($country == 'PL')
	{
		$db="fashionbardb_airg_pl";
	}
	else
	{
		
	}
	
	if($partner == 'all')
	{
		$cond=" and partner != 'all' ";
	}
	else
	{
		$cond=" and partner = '".$partner."' ";
	}
	
	if($msisdn == '')
	{
		
		$condition="where pindatetime >= '".$startdate."' and pindatetime<= '".$enddate."' ".$cond." ";
	}
	else{
		
		$condition="where msisdn = '".$msisdn."' and  pindatetime >= '".$startdate."' and pindatetime<= '".$enddate."'  ".$cond." ";
	}
	
	
	if($action == 'ping')
	{
		$title="Pin Generation";
		$sql="select pindatetime,advertiserid, msisdn, operator,status,response, responsesent, partner from ".$db.".requestpin 
		".$condition." order by pindatetime desc "; 
		//echo $sql; exit;
		$res=$conn->query($sql);
	}
	else{
		
		$title="Pin Verification";
	
		$sql="select pindatetime,advertiserid,msisdn,pin, operator,status,response, responsesent, partner from ".$db.".pinverify 
		".$condition." order by pindatetime desc ";
		//echo $sql; exit;
		$res=$conn->query($sql);
		
	}

	


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
                    <h2>Search Report</h2>
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
					
						
						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> Country
						<select name="country" class="form-control select2_single" >
							<option value="Oman" <?php if($country=='Oman'){$selected='selected';}else{$selected='';} echo $selected; ?> >Oman</option>
							<option value="QA" <?php if($country=='QA'){$selected='selected';}else{$selected='';} echo $selected; ?> >QA</option>
							<option value="KSA" <?php if($country=='KSA'){$selected='selected';}else{$selected='';} echo $selected; ?> >KSA</option>
							<option value="UAE" <?php if($country=='UAE'){$selected='selected';}else{$selected='';} echo $selected; ?> >UAE</option>
							<option value="IQ" <?php if($country=='IQ'){$selected='selected';}else{$selected='';} echo $selected; ?> >IQ</option>
							<option value="PS" <?php if($country=='PS'){$selected='selected';}else{$selected='';} echo $selected; ?> >PS</option>
							<option value="KW" <?php if($country=='KW'){$selected='selected';}else{$selected='';} echo $selected; ?> >KW</option>
							<option value="PL" <?php if($country=='PL'){$selected='selected';}else{$selected='';} echo $selected; ?> >PL</option>
							<option value="IQ" <?php if($country=='IQ'){$selected='selected';}else{$selected='';} echo $selected; ?> >IQ</option>
							
							
							
						</select>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> Pin Action
						<select name="action" class="form-control select2_single" >
							<option value="ping" <?php if($action=='ping'){$selected='selected';}else{$selected='';} echo $selected; ?> >Pin Generation</option>
							<option value="pinv" <?php if($action=='pinv'){$selected='selected';}else{$selected='';} echo $selected; ?> >Pin Verification</option>
	
						</select>
						</div>
						
						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> MSISDN
						<input type="text" class="form-control" name="msisdn" value="<?php echo $msisdn; ?>">
						</div>
						
						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> Partner
						<select name="partner" class="form-control select2_single" >
							<option value="all" <?php if($partner=='all'){$selected='selected';}else{$selected='';} echo $selected; ?> >All</option>
							<option value="airg" <?php if($partner=='airg'){$selected='selected';}else{$selected='';} echo $selected; ?> >AirG</option>
							<option value="svmobi" <?php if($partner=='svmobi'){$selected='selected';}else{$selected='';} echo $selected; ?> >SVMobi</option>
							<option value="svmobi" <?php if($partner=='svmobi'){$selected='selected';}else{$selected='';} echo $selected; ?> >SVMobi GS</option>
							<option value="svmobigpub" <?php if($partner=='svmobigpub'){$selected='selected';}else{$selected='';} echo $selected; ?> >SVMobi GP</option>
							<option value="11players" <?php if($partner=='11players'){$selected='selected';}else{$selected='';} echo $selected; ?> >11players</option>
							<option value="linkit" <?php if($partner=='linkit'){$selected='selected';}else{$selected='';} echo $selected; ?> >LinkIT</option>
							<option value="100sports" <?php if($partner=='100sports'){$selected='selected';}else{$selected='';} echo $selected; ?> >100Sports Celeb</option>
							<option value="100sports2" <?php if($partner=='100sports2'){$selected='selected';}else{$selected='';} echo $selected; ?> >100Sports TV</option>
							<option value="100sportspv" <?php if($partner=='100sportspv'){$selected='selected';}else{$selected='';} echo $selected; ?> >100Sports TV2</option>
							<option value="100sportspv2" <?php if($partner=='100sportspv2'){$selected='selected';}else{$selected='';} echo $selected; ?> >100Sports English</option>
							<option value="aisdigitech" <?php if($partner=='aisdigitech'){$selected='selected';}else{$selected='';} echo $selected; ?> >AIS Digitech</option>
							<option value="hungama" <?php if($partner=='hungama'){$selected='selected';}else{$selected='';} echo $selected; ?> >Hungama</option>
							<option value="jovial" <?php if($partner=='jovial'){$selected='selected';}else{$selected='';} echo $selected; ?> >Jovial</option>
							<option value="jovial2" <?php if($partner=='jovial2'){$selected='selected';}else{$selected='';} echo $selected; ?> >Jovial2</option>
							<option value="shemaroo" <?php if($partner=='shemaroo'){$selected='selected';}else{$selected='';} echo $selected; ?> >Shemaroo</option>
							<option value="shemaroo2" <?php if($partner=='shemaroo2'){$selected='selected';}else{$selected='';} echo $selected; ?> >Shemaroo 2</option>
							<option value="mevish" <?php if($partner=='mevish'){$selected='selected';}else{$selected='';} echo $selected; ?> >Mevish</option>
							
							<option value="multirouting" <?php if($partner=='multirouting'){$selected='selected';}else{$selected='';} echo $selected; ?> >Multirouting </option>
							<option value="netmarble" <?php if($partner=='netmarble'){$selected='selected';}else{$selected='';} echo $selected; ?> >NetMarble </option>
							
							<option value="amusedigi" <?php if($partner=='amusedigi'){$selected='selected';}else{$selected='';} echo $selected; ?> >AmuseDigi </option>
							<option value="in10media" <?php if($partner=='in10media'){$selected='selected';}else{$selected='';} echo $selected; ?> >in10media </option>
							<option value="playwing" <?php if($partner=='playwing'){$selected='selected';}else{$selected='';} echo $selected; ?> >PlayWing </option>
							<option value="playwing_mind" <?php if($partner=='playwing_mind'){$selected='selected';}else{$selected='';} echo $selected; ?> >PlayWing Mind</option>
							<option value="tricona" <?php if($partner=='tricona'){$selected='selected';}else{$selected='';} echo $selected; ?> >Tricona </option>
							<option value="mobimartech" <?php if($partner=='mobimartech'){$selected='selected';}else{$selected='';} echo $selected; ?> >MobimarTech </option>
					
							<option value="secondprofit" <?php if($partner=='secondprofit'){$selected='selected';}else{$selected='';} echo $selected; ?> >SecondProfit </option>
							
							<option value="alkatel" <?php if($partner=='alkatel'){$selected='selected';}else{$selected='';} echo $selected; ?> >Alkatel </option>
							<option value="topborder" <?php if($partner=='topborder'){$selected='selected';}else{$selected='';} echo $selected; ?> >Top Border </option>
							<option value="forest" <?php if($partner=='forest'){$selected='selected';}else{$selected='';} echo $selected; ?> >Forest </option>
							<option value="mediaxo" <?php if($partner=='mediaxo'){$selected='selected';}else{$selected='';} echo $selected; ?> >MediaXO </option>
							<option value="viyugames" <?php if($partner=='viyugames'){$selected='selected';}else{$selected='';} echo $selected; ?> >ViyuGames </option>
							<option value="taqniyat" <?php if($partner=='taqniyat'){$selected='selected';}else{$selected='';} echo $selected; ?> >TaqniyatTech </option>
							<option value="taqniyat2" <?php if($partner=='taqniyat2'){$selected='selected';}else{$selected='';} echo $selected; ?> >TaqniyatTech 2</option>
							<option value="techfusion" <?php if($partner=='techfusion'){$selected='selected';}else{$selected='';} echo $selected; ?> >Tech Fusion</option>
							<option value="techfusion_mt" <?php if($partner=='techfusion_mt'){$selected='selected';}else{$selected='';} echo $selected; ?> >Tech Fusion MT</option>
						<!--	<option value="mehuliq" <?php if($partner=='mehuliq'){$selected='selected';}else{$selected='';} echo $selected; ?> >Mehul IQ</option> -->
							<option value="innomovilmjx" <?php if($partner=='innomovilmjx'){$selected='selected';}else{$selected='';} echo $selected; ?> >InnomovilMJX</option>
							<option value="mediadigital" <?php if($partner=='mediadigital'){$selected='selected';}else{$selected='';} echo $selected; ?> >MediaDigital</option>
							<option value="grand" <?php if($partner=='grand'){$selected='selected';}else{$selected='';} echo $selected; ?> >GrandTechno</option>
							<option value="playwingkiosk" <?php if($partner=='playwingkiosk'){$selected='selected';}else{$selected='';} echo $selected; ?> >playwingkiosk</option>
							<option value="innovera" <?php if($partner=='innovera'){$selected='selected';}else{$selected='';} echo $selected; ?> >Innovera</option>
							<option value="arshiya" <?php if($partner=='arshiya'){$selected='selected';}else{$selected='';} echo $selected; ?> >Arshiya</option>
							<option value="svmobicontest" <?php if($partner=='svmobicontest'){$selected='selected';}else{$selected='';} echo $selected; ?> >SVMobi-Contest</option>
							<option value="jam" <?php if($partner=='jam'){$selected='selected';}else{$selected='';} echo $selected; ?> >JAM</option>
							<option value="organikmedia" <?php if($partner=='organikmedia'){$selected='selected';}else{$selected='';} echo $selected; ?> >OrganikMedia</option>
							<option value="netmedia" <?php if($partner=='netmedia'){$selected='selected';}else{$selected='';} echo $selected; ?> >NetMedia</option>
							<option value="mobilyarabia" <?php if($partner=='mobilyarabia'){$selected='selected';}else{$selected='';} echo $selected; ?> >MobilyArabia</option>
							<option value="numero" <?php if($partner=='numero'){$selected='selected';}else{$selected='';} echo $selected; ?> >Numero</option>
							

						</select>
						</div>
						
						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> Start Date
						<input class="date-picker form-control col-md-7 col-xs-12 birthday" name="start_date" value="<?php if($startdate!=''){echo date('d-m-Y',strtotime($startdate));}else{ echo date('d-m-Y');} ?>"  type="text">
						</div>

						<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback"> End Date
						<input class="date-picker form-control col-md-7 col-xs-12 birthday" name="end_date" value="<?php if($enddate!=''){echo date('d-m-Y',strtotime($enddate));}else{ echo date('d-m-Y');} ?>" type="text">
						</div>

						
						
						

						
						
					</div>
					<div class="x_content">
						

						
						
						
						<div class="col-md-9 col-sm-9 col-xs-12">
						 
						  <button type="submit" name="submit" class="btn btn-success">Submit</button>
						</div>
                      
					</div>
                    </form>
                  
                </div>
				
              
              </div>
            </div>
			
			
						
			<?php 	
			if($count==1)
			{
			?>	
			<div class="row">

				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2><?php echo $title; ?> <small></small></h2>
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
					  <div class="x_content"  style="overflow:auto;">
						
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
								<tr>
								<?php
								if($action == "ping")
								{
								?>
									<td style="width:5%"><strong>PinDateTime</strong></td>
									<td style="width:5%"><strong>PubID</strong></td>
									<td style="width:5%"><strong>MSISDN</strong></td>
									<td style="width:5%"><strong>Operator</strong></td>
									<td style="width:5%"><strong>Status</strong></td>
									<td style="width:25%"><strong>Response</strong></td>
									<td style="width:25%"><strong>Response Sent</strong></td>
									<td style="width:5%"><strong>partner</strong></td>
								<?php	
									
								}
								else
								{
								?>
									<td style="width:5%"><strong>PinDateTime</strong></td>
									<td style="width:5%"><strong>PubID</strong></td>
									<td style="width:5%"><strong>MSISDN</strong></td>
									<td style="width:5%"><strong>PIN</strong></td>
									<td style="width:5%"><strong>Operator</strong></td>
									<td style="width:5%"><strong>Status</strong></td>
									<td style="width:20%"><strong>Response</strong></td>
									<td style="width:25%"><strong>Response Sent</strong></td>
									<td style="width:5%"><strong>partner</strong></td>
								<?php
									
								}
								?>
									
									
									
								</tr>
							</thead>


							<tbody>
								<?php 
								
								
								
									while($row=$res->fetch())
									{
										
								?>
									<tr>
										<?php
										if($action == "ping")
										{
										?>
										<td style="width:5%"><?php echo $row['pindatetime']; ?></td>
										<td style="width:5%"><?php echo $row['advertiserid']; ?></td>
										<td style="width:5%"><?php echo $row['msisdn']; ?></td>
										
										<td style="width:5%"><?php echo $row['operator']; ?></td>
										<td style="width:5%"><?php echo $row['status']; ?></td>
										<td style="width:25%"><?php echo $row['response']; ?></td>
										<td style="width:25%"><?php echo $row['responsesent']; ?></td>
										<td style="width:5%"><?php echo $row['partner']; ?></td>
										
										
										
										<?php	
											
										}
										else
										{
										?>
										<td style="width:5%"><?php echo $row['pindatetime']; ?></td>		
										<td style="width:5%"><?php echo $row['advertiserid']; ?></td>
										<td style="width:5%"><?php echo $row['msisdn']; ?></td>
										<td style="width:5%"><?php echo $row['pin']; ?></td>
										
										<td style="width:5%"><?php echo $row['operator']; ?></td>
										<td style="width:5%"><?php echo $row['status']; ?></td>
										<td style="width:20%"><?php echo $row['response']; ?></td>
										<td style="width:25%"><?php echo $row['responsesent']; ?></td>
										<td style="width:5%"><?php echo $row['partner']; ?></td>
										
										
										
										<?php
											
										}
										?>
									
										
									</tr>
								
								
								
								<?php
									}
								?>
								
								
							</tbody>
							
							
								
								
						</table>
					  </div>
					</div>
                </div>
			</div>  
					  
		  
			 
			<?php
			}
			else
			{}
			?>
					
			
		</div>
        <!-- /page content -->

       <?php
	   include("includes/footer.php");
		?>

<script type="text/javascript">
$(document).ready(function(){

    $("#country").change(function(){
		
		var country=$("#country").val();
		
			$("#operator").val('');
			$("#pubad").val('');
			$("#pubadid").val('');
			$("#temp").hide();
		
        $.ajax({
            type: "GET",
            url: "ajax/find_operator1.php?country="+country       
			
        }).done(function(data){
            $("#response1").html(data);
			 
        });
    });
});
</script>	
		
		
		
		
<script type="text/javascript">
$(document).ready(function(){

    $("#pubad").change(function(){
		
		var check1=$("#check1").val();
		if(check1 == 0)
		{
			
		}
		else	
		{
			$(".sel").val('');
			$("#t").hide();
			$("#f").show();
						
		}
        var operator = $("#operator").val();
		var product = $("#product").val();
		var pubad = $("#pubad").val();
		
        $.ajax({
            type: "GET",
            url: "ajax/find_publisher_advertiser.php?operator="+operator+"&product="+product+"&pubad="+pubad       
			
        }).done(function(data){
            $("#response").html(data);
			 
        });
    });
});



</script>	