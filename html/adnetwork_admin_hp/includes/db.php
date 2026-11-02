<?php

$product ="glamour";
	if(strtolower($operator) == 'vodafone')
		{
			
			if(strtolower($product)  == 'games')
			{
					$logdb="voda_".$product."db_0817";
			}
			else
			{
					$logdb="voda_".$product."db";
			}
		}
		elseif(  strtolower($operator) == 'idea')
		{
		
			if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db_0218_02";
			}
			else
			{
				$logdb=$operator."_".$product."db_0218_12";
			}
			
			
		}
		elseif(strtolower($operator) == 'airtel' )
		{
			
				$logdb=$operator."_".$product."db";
			
				
		}
		elseif(  strtolower($operator) == 'ais')
		{
		
				if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db";
			}
			else
			{
				$logdb=$operator."_".$product."db_0118";
			}
			
		}
		elseif(  strtolower($operator) == 'dtac')
		{
		
			
			if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db";
			}
			else
			{
				$logdb=$operator."_".$product."db";
			}
			
			
		}
		elseif(  strtolower($operator) == 'truemove')
		{
		
			
				$logdb=$operator."_".$product."db";
			
			
		}
		elseif(  strtolower($operator) == 'celcom')
		{
		
			
					if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db";
			}
			else
			{
				$logdb=$operator."_".$product."db";
			}
			
			
			
		}
		elseif(  strtolower($operator) == 'vodacom')
		{
		
			
				$logdb=$operator."_".$product."db";
			
			
		}
		elseif(  strtolower($operator) == 'mtn')
		{
		
			
					if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db";
			}
			else
			{
				$logdb=$operator."_".$product."db";
			}
			
			
		}
		elseif(  strtolower($operator) == 'kuwaitooredoo')
		{
		
			
				$logdb=$operator."_".$product."db";
			
			
		}
		elseif(  strtolower($operator) == 'xl')
		{
		
				if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db_1217";
			}
			else
			{
				$logdb=$operator."_".$product."db";
			}
			
			
		}
		elseif(  strtolower($operator) == 'indosat')
		{
		
				if(strtolower($product)  == 'games')
			{
				$logdb=$operator."_".$product."db_1217_16";
			}
			else
			{
				$logdb=$operator."_".$product."db";
			}
			
			
		}
		
		
		else
		{
			$logdb=$operator."_".$product."db";	
		}
	
$commondb="commondb";
?>