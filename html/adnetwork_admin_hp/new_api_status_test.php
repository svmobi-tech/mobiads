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
		$db="fashionbardb_airg_om_new";
	}
	elseif($country == 'QA')
	{
		$db="fashionbardb_airg_qa_new";
	}
	elseif($country == 'KSA')
	{
		$db="fashionbardb_airg_sa_new";
	}
	elseif($country == 'KW')
	{
		$db="fashionbardb_airg_kw_new";
	}
	elseif($country == 'UAE')
	{
		$db="fashionbardb_airg_ae_new";
	}
	elseif($country == 'PS')
	{
		$db="fashionbardb_airg_ps_new";
	}
	elseif($country == 'PL')
	{
		$db="fashionbardb_airg_pl_new";
	}
	elseif($country == 'IQ')
	{
		$db="fashionbardb_airg_iq_new";
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
							<option value="PL" <?php if($country=='PL'){$selected='selected';}else{$selected='';} echo $selected; ?> >PL</option>
							<option value="PS" <?php if($country=='PS'){$selected='selected';}else{$selected='';} echo $selected; ?> >PS</option>
							<option value="KW" <?php if($country=='KW'){$selected='selected';}else{$selected='';} echo $selected; ?> >KW</option>
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
							
							<option value="netmarble_new" <?php if($partner=='netmarble_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >NetMarble </option>
					
							<option value="mastertrack_new" <?php if($partner=='mastertrack_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Master Track </option>
							<option value="mastertrack2_new" <?php if($partner=='mastertrack2_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Master Track 2 </option>
	
							<option value="fame_new" <?php if($partner=='fame_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Fame </option>
							<option value="puretech_new" <?php if($partner=='puretech_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >PureTech </option>
							<option value="wings_new" <?php if($partner=='wings_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings </option>
							<option value="wings029_new" <?php if($partner=='wings029_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings029 </option>
							<option value="wings936_new" <?php if($partner=='wings936_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings936 </option>
							<option value="wings357_new" <?php if($partner=='wings357_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings357 </option>
							<option value="wings439_new" <?php if($partner=='wings439_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings439 </option>
				
							<option value="wings736_new" <?php if($partner=='wings736_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Wings736 </option>
							
						
							
							<option value="ehyper_new" <?php if($partner=='ehyper_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >EHyper</option>
							<option value="ehyper3_new" <?php if($partner=='ehyper3_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >EHyper3</option>
							<option value="playwing_mind_new" <?php if($partner=='playwing_mind_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Playwing Mind</option>
							<option value="playwing_new" <?php if($partner=='playwing_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Playwing</option>
							<option value="100sportspv_new" <?php if($partner=='100sportspv_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >100sports PV</option>
							<option value="100sportspv2_new" <?php if($partner=='100sportspv2_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >100sports PV2</option>
							<option value="100sportstv_new" <?php if($partner=='100sportstv_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >100sports TV</option>
							<option value="mmt_new" <?php if($partner=='mmt_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >MMT</option>
							<option value="fame_new" <?php if($partner=='fame_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Fame</option>
							<option value="mediadigital_new" <?php if($partner=='mediadigital_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >MediaDigital</option>
							<option value="mobimartech_new" <?php if($partner=='mobimartech_new'){$selected='selected';}else{$selected='';} echo $selected; ?> >Mobimartech</option>
							
					
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