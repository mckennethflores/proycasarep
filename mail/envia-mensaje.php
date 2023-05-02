<style>
    .colorMensaje{
 
    background: #7dc50e;
    color: white;
    padding: 8px 15px;
    border-radius: 10px;
    font-size: 1.2rem;
  
    }
</style>
<?php
  $nombre     = $_POST['nombres'];
  $telefono    = $_POST['telefono_movil'];
  $email        = $_POST['email'];
 
  $mensaje      = $_POST['mensaje'];

// Multiple recipients
$to = 'oswaldoelflori@gmail.com'; // note the comma

// Subject
$subject = 'Paladdin del Rack';

// Message
$message = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Paladdin del Rack</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
				  <tr>
						<td align="center" bgcolor="#70bbd9" style="  color: #153643; font-size: 10px; font-weight: bold; font-family: Arial, sans-serif;">
							 <p></p>
						</td>
					</tr>  
					<tr>
						<td bgcolor="#ffffff" style="padding: 0px 30px 0px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										
										<b>Datos del Cliente</b>
									</td>
								</tr>
								<tr>
									<td style="font-size: 28px; padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
										
										 
										<b>Nombre: </b> '.$nombre.'<br>
										<b>Telefono: </b> '.$telefono.' <br>
                                        <b>Email</b> '.$email.' <br>
                                        <b>Mensaje</b> '.$mensaje.' <br>
                                        
										

									</td>
								</tr>
								<tr>
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="260" valign="top">
													<!-- <table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
																<img src="images/left.gif" alt="" width="100%" height="140" style="display: block;" />
															</td>
														</tr>
														<tr>
															<td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
														 		Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
														 	</td>
														</tr>
													</table> -->
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">
													&nbsp;
												</td>
												<td width="260" valign="top">
												<!-- 	<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td>
																<img src="images/right.gif" alt="" width="100%" height="140" style="display: block;" />
															</td>
														</tr>
														<tr>
															<td style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
													 			Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat.
														  	</td>
														</tr>
													</table> -->
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#033769" style="padding: 30px 30px 30px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										&reg; Paladdin del Rack - Página Web<br/>
										<!-- a href="#" style="color: #ffffff;"><font color="#ffffff">Unsubscribe</font></a> to this newsletter instantly -->
									</td>
									<td align="right" width="25%">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<!-- <a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
													</a> -->
												</td>
												<td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<!-- <a href="http://www.twitter.com/" style="color: #ffffff;">
														<img src="images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
													</a> -->
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

<!--analytics-->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 

</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Mckenneth <frsystemperu@gmail.com>';
$headers[] = 'From: Paladdin del Rack <norepply@gmail.com>';
$headers[] = 'Cc: birthdayarchive@example.com';


// Mail it
if(mail($to, $subject, $message, implode("\r\n", $headers)))
{
	echo '<p class="colorMensaje"> Gracias '.$nombre.' Tu mensaje se envio correctamente.</p>';
}else{
	echo '<p>Mailer Error: ' . $mail->ErrorInfo.'</p>';
  }

?>