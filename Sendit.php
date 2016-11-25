<?php
# <-- Created by Xploit -->

/* --Sending Our Email-- */
if(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['namespoof']) && isset($_POST['emailspoof'])) {
	$DefaultEmail="emailtosendto@mail.com";
	$NameToSpoof=$_POST['namespoof'];
	$EmailToSpoof=$_POST['emailspoof'];
	$Subject=$_POST['subject'];
	$Message=$_POST['message'];
	$Message=wordwrap($Message, 70, "\r\n");
	
	/* Custom Headers */
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' . $NameToSpoof . '<' . $EmailToSpoof. '>' . "\r\n";

	$Sendit=@mail( $DefaultEmail, $Subject, $Message, $headers );
	
	/* --Check if our mail has Sent-- */
	if($Sendit) { echo "Sent!"; } else { echo "Failed.."; }
} else {
	
	/* --Check if our inputs were filled-- */
	if(!isset($Sendit)) { echo " Fill in all Inputs.."; }
}
?>
