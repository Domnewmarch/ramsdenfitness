<?php
if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])){
    sleep(3);
    $messagevar=htmlspecialchars_decode($_POST['message']);
    $name = $_POST['name'];
    $whyfor = htmlspecialchars_decode($_POST['whyfor']);
    $e=$_POST['email'];
    
    $htmlBody = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>re
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i|Poppins:400,400i,700,700i" rel="stylesheet" />
    <!--<![endif]-->
	<title>Kelectrix - Contact form</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#ffffff; -webkit-text-size-adjust:none }
		a { color:#0000ee; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			.bg { background-size: 100% auto !important; -webkit-background-size: 100% auto !important; }
			
			.text-header,
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.container { padding: 20px 10px !important }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }
			.p0-15 { padding: 0px 15px !important; }
			.mpb30 { padding-bottom: 30px !important; }
			.mpb15 { padding-bottom: 15px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-dir,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 30px !important; }
			.column-empty2 { padding-bottom: 10px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#ffffff; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
		<tr>
			<td align="center" valign="top">
				<!-- Header -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center">
							<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
								<tr>
									<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
										<!-- Header -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="p30-15 tbrr" style="padding: 30px 0px 40px 0px; border-radius:12px 12px 0px 0px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;">Ramsdon Fitness</td>
																	</tr>
																</table>
															</th>
															<th class="column-empty2" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
															<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Header -->

										<!-- Hero -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
											</tr>
											<tr>
												<td class="p30-15" style="padding: 40px 0px 40px 0px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="h3 pb15" style="color:#000000; font-family:Arial, sans-serif; font-size:15px; line-height:32px; text-align:left; padding-bottom:15px;">New message from: $name</td>
															<td class="h3 pb15" style="color:#000000; font-family:Arial, sans-serif; font-size:15px; line-height:32px; text-align:left; padding-bottom:15px;">EMail: $e</td>
														</tr>
														<tr>
															<td class="h3 pb15" style="color:#000000; font-family:Arial, sans-serif; font-size:15px; line-height:32px; text-align:left; padding-bottom:15px;">Enquiring about: $whyfor</td>
														</tr>
														<tr>
															<td class="text pb15" style="color:#666666; font-family:Arial, sans-serif; font-size:15px; line-height:28px; text-align:left; padding-bottom:15px;"><strong>Message:</strong><br> $messagevar</td>
														</tr>
														<tr>
															<td class="text-link" style="color:#0000ee; font-family:Arial, sans-serif; font-size:16px; line-height:28px; text-align:left;"><a href="#" target="_blank" class="link-u" style="color:#0000ee; text-decoration:underline;"></td>
														</tr>
														<tr>
														</tr>
													</table>
												</td>
											</tr>
											<Columns -->

										<!-- Footer -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="p0-15-30" style="padding-bottom: 40px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td align="center" style="padding-bottom: 30px;">
																<table border="0" cellspacing="0" cellpadding="0">
															<td class="text-footer1 pb10" style="color:#777777; font-family:Arial, sans-serif; font-size:14px; line-height:20px; text-align:center; padding-bottom:10px;">Ramsden Fitness</td>
														</tr>
														<tr>
															<td class="text-footer2 pb20" style="color:#777777; font-family:Arial, sans-serif; font-size:12px; line-height:26px; text-align:center; padding-bottom:20px;">Ramsden Fitness</td>
														</tr>
														<tr>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Footer -->
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<!-- END Header -->
			</td>
		</tr>
	</table>
</body>
</html>
EOD;
    
    // DO our checks
    // Empty Email
    if ($_POST['email']==null){
        header('Content-Type: application/json');
        $x = "You did not enter a valid email address, please go back and amend this.";
        $return_arr[] = array("status" => "Error",
                    "friendly" => $x);
        echo json_encode($return_arr);
        exit(); 
    }
    // EMpty name
    if ($_POST['name']==null){
        header('Content-Type: application/json');
        $x = "You did not enter a name, please go back and amend this.";
        $return_arr[] = array("status" => "Error",
                    "friendly" => $x);
        echo json_encode($return_arr);
        exit(); 
    }
    
    // Empty message
    if ($_POST['email']==null){
        header('Content-Type: application/json');
        $x = "You did not enter a message, please go back and amend this.";
        $return_arr[] = array("status" => "Error",
                    "friendly" => $x);
        echo json_encode($return_arr);
        exit(); 
    }
    
    // Valid email format
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json');
        $x = "You did not enter a valid email address, please go back and amend this.";
        $return_arr[] = array("status" => "Error",
                    "friendly" => $x);
        echo json_encode($return_arr);
        exit(); 
    }
    
    
    // Success script, form is legit
    header('Content-Type: application/json');
        $x = "Your message about," . $whyfor . " has been sent we will be in touch as soon as possible";
        $return_arr[] = array("status" => "Success",
                    "friendly" => $x);
        echo json_encode($return_arr);
        // Send the email
        $email_to = 'domnewmarch1@gmail.com';
        $name = $_POST["name"];
        $email_from = 'contact@ramsdenfitness.com';
        $message = $_POST["message"];
        $email_subject = $whyfor . " - From:" . $_POST['name'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-y8" . "\r\n";
        $headers .= "From: " . $email_from . "\n";
        $headers .= "Reply-To: " . $email_from . "\n";
        $headers .= 'Bcc: domnewmarch1@gmail.com' . "\r\n";
        $message = "Name: ". $name . "\r\nMessage: " . $message;
        ini_set("sendmail_from", $email_from);
        $sent = mail($email_to, $email_subject, $htmlBody, $headers, "-f" .$email_from);
        // Insert into DB 
    
} else {
    header('Content-Type: application/json');
    $x = "Incomplete Form";
    $return_arr[] = array("status" => "Error",
                    "friendly" => $x);
    echo json_encode($return_arr);
    exit();
}
