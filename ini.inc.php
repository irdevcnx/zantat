
<?php
	if($_SERVER["HTTP_HOST"] == "localhost")
	{
		$ir_link = "/IRv2/IR_Client_Site_rce";
		$co_link = "/IRv2/IR_Client_Site_rce";
	}
	else if(preg_match("/^.*irchartnexus\.com.*$/",$_SERVER["HTTP_HOST"]))
	{	
		$host = explode(".", $_SERVER["HTTP_HOST"]);
		if(count($host) == 3)
		{
			//for DEV & UAT
			include($_SERVER["DOCUMENT_ROOT"]."/../html/s/ircnx.php");
		}
		else
		{
			include($_SERVER["DOCUMENT_ROOT"]."/../../irchart/public_html/s/ircnx.php");
		}
		
	}
	else 
	{
		$ir_link = "https://ir2.chartnexus.com";
		$co_link = "http://zantat.com.my";
	?>	

<?php 	}
	
	$ir_link .= "/zantat/";
	$co_link .= "/";
	
	$companyID 		= 166;
	$companyname 	= "Zantat";
	$companyImage = "0301";
	$countryListed	="klse";
	$marketID ="2";
	

?>

