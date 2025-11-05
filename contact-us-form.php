<?php
$captcha;
if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
    echo "<script type='text/javascript'>alert('Please confirm that you are not a robot.');window.history.go(-1);</script>";
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
    echo '<script type="text/javascript">alert("Thank you for your feedback.  We will  contact you soon.");window.location = "contact-us.php"</script>';
} else {
    echo "<script type='text/javascript'>alert('You are spammer !');window.history.go(-1);</script>";
}
?>

<?php include_once("header.php");?>
<div id="content_holder">
<p class="title_15px">Inquiry Form</p>

<?php 
switch ($_POST['action']) {
case 'file':
    $target_dir = "uploads/";
    $file = $_FILES["fileProperties"]["name"];
    $target_file = $target_dir . basename($file);
    $circulars_ID = $_POST['circulars_ID'];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "xls" && $imageFileType != "pptx") {
        $message = "Sorry, only pdf, doc, docx, xls, pptx files are allowed.";
        echo "<script type='text/javascript'>alert('$message'); window.history.back();</script>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        $file = str_replace(' ', '_', $file);
        $filename = $file;//"Property_".uniqid().".".$imageFileType;
        $target_file2 = $target_dir .$filename;
        
        $query1="select circulars_PDF from circulars WHERE circulars_ID='$circulars_ID'";
        $result1=mysqli_query($conn,$query1);
        if($row = mysqli_fetch_array($result1))
        {
            $existingFilename = $row["ffPDF"];
            $fullPath = $target_dir.$existingFilename;
            
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
        }
        if (move_uploaded_file($_FILES["fileProperties"]["tmp_name"], $target_file2)) {
//             $query="UPDATE circulars SET circulars_PDF='$filename' WHERE circulars_ID='$circulars_ID'";
//             if (mysqli_query($conn,$query)){
//                 header("Location: circularDetails.php");
//                 echo "Success upload file";
//             }
//             else
//             {
//                 $message =  move_uploaded_file($_FILES["fileProperties"]["tmp_name"], $target_file2 );
//                 /* echo("Error description: " . $message); */
//                 echo "<script type='text/javascript'>alert('$mysqli->error'); window.history.back();</script>";
//             }

            echo "<script type='text/javascript'>alert('Success upload file'); window.history.back();</script>";
            
        } else {
            $message =  move_uploaded_file($_FILES["fileProperties"]["tmp_name"], $target_file2 );
            /* echo("Error description: " . $message); */
            echo "<script type='text/javascript'>alert('Unable to upload'); window.history.back();</script>";
        }
    }
    
    default:
    break;
}

?>

<?php   $subject = "Zantat Enquiry Form";
        $name = $_POST['name'];
        $email= $_POST['email'];
        $contact= $_POST['contact'];
        $company= $_POST['company'];
        $Coated = $_POST['Coated'];
        $Uncoated = $_POST['Uncoated'];
        $Ground = $_POST['Ground'];
        $Precipitated = $_POST['Precipitated'];
        $Dispersion = $_POST['Dispersion'];
        $Message  = $_POST['Message'];
        
        $product="\n"."\n".$Coated."\n"."\n".$Uncoated."\n"."\n".$Ground."\n"."\n".$Precipitated."\n"."\n".$Dispersion;
	
	$headers .= "Reply-To: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Return-Path: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "From: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Bcc: IRCNX <mizakamelia@gmail.com>\r\n";
		
// 		$subject="Product Enquiries";
		
	$emailBody="Zantat Enquiry Form"."\n"."\n";
	$emailBody.="Name: ".$name."\n"."\n";
	$emailBody.="Email: ".$email."\n"."\n";
	$emailBody.="Contact: ".$contact."\n"."\n";
	$emailBody.="Company: ".$company."\n"."\n";
	$emailBody.="Product : ".$product."\n"."\n";
	$emailBody.="Message : ".$Message."\n"."\n";
	
	
	

		$sent = cnxsendmail('sales@zantat.com.my', $subject, $emailBody, $headers);
// 		$sent = cnxsendmail('ahmad.kamelia@chartnexus.com', $subject, $emailBody, $headers);
		
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