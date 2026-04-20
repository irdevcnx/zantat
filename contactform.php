<?php
$captcha;
if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    echo "<script type='text/javascript'>alert('Please check the the captcha form.');window.history.go(-1);</script>";
    exit;
}
$secretKey = "6LdskrUUAAAAALSu4iU62PJmDkTMzuRomLeLVn5D";
$ip = $_SERVER['REMOTE_ADDR'];
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);
// should return JSON with success as true
if($responseKeys["success"]) {
    echo '<script type="text/javascript">alert("Thank you for your inquiry. We will respond to you within 3 working days.");window.location = "contact.php"</script>';
} else {
    echo "<script type='text/javascript'>alert('You are spammer !');window.history.go(-1);</script>";
}
?>

<?php include_once("header.php");?>
<div id="content_holder">
<p class="title_15px">Inquiry Form</p>
<?php   $subject = "J107 Enquiry Form";
        $name = $_POST['name'];
        $company = $_POST['company'];
        $number = $_POST['number'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $carbonate = $_POST['carbonate'];
        $uncoated = $_POST['uncoated'];
        $calcium = $_POST['calcium'];
        $ground = $_POST['ground'];
        $precipitated = $_POST['precipitated'];
        $message = $_POST['message'];
        
        
        $feedbacks= $carbonate." ".$uncoated." ".$calcium." ".$ground." ".$precipitated." ".$message;
	
	$headers .= "Reply-To: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Return-Path: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "From: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Bcc: IRCNX <mizakamelia@gmail.com>\r\n";
		
// 		$subject="Product Enquiries";
		
	$emailBody="ZANTAT Enquiry Form"."\n"."\n";
	$emailBody.="Full Name: ".$name."\n"."\n";
	$emailBody.="Company Name: ".$company."\n"."\n";
	$emailBody.="Contact Number: ".$number."\n"."\n";
	$emailBody.="Email Address: ".$email."\n"."\n";
	$emailBody.="Email Address: ".$feedbacks."\n"."\n";
	
	
	
	
	

	// 		$sent = cnxsendmail('sales@zantat.com.my', $subject, $emailBody, $headers);
		$sent = cnxsendmail('ahmad.kamelia@chartnexus.com', $subject, $emailBody, $headers);
		
		function cnxsendmail($receiverMail, $subject, $content, $isHtmlMail){
		    
		    $url = "http://cnmail.chartnexus.com:9192/util/emailv2.php?apikey=12345678abc&to=".urlencode($receiverMail)."&subject=".urlencode($subject)."&message=".urlencode($content)."&html_email=".urlencode($isHtmlMail);
		    $contents = file_get_contents($url);
		    return $contents;
		    
		}
?>
<p>&nbsp;</p>
<a href="javascript:history.back();" class="more">Back</a>
</div>
<?php include_once("footer.php");?>