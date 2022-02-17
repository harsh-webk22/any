<?php
	if(!$_POST) exit;

		// Email address verification, do not edit.
		function isEmail($email) {
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
		}
		$name = $_POST['name'];
		$director = $_POST['director'];
		$contact = $_POST['contact'];
		$office = $_POST['office'];
		$phone = $_POST['phone'];
		$Mobile = $_POST['Mobile'];
		$fax = $_POST['fax'];
		$email = $_POST['email'];
		$semail = $_POST['semail'];
		$message = $_POST['Url'];
		$address = 'alex@ztransfers.com';
		$subject = 'You\'ve been contacted by ' . $name . '.';	
		
		
		  $message .=	'<html>     	<head>
                                                        </head>
                                                        <body>
                                                        <div id="main" style="background-color:#a1ddf5; width:379px;padding: 10px 10px 64px 13px;">
                                                             
                                                             <div id="main_in" style="background-color:#FEFFE8;width: 362px;border-radius: 20px;padding: 26px 0px 70px 15px;">
                                                                <p> Zythum Infosys </p>											
                                                                 <div><strong>Name of the Center:'.$name.'</strong></div><br>
																<div><strong>Director:'.$director.'</strong></div><br>
																<div><strong>Contact Person name:'.$contact.'</strong></div><br>
																<div><strong>Office Address:'.$office.'</strong></div><br>
																<div><strong>Phone:'.$phone.'</strong></div><br>
																<div><strong>Mobile:'.$Mobile.'</strong></div><br>
																<div><strong>Fax:'.$fax.'</strong></div><br>
																<div><strong>Email:'.$email.'</strong></div><br>
																<div><strong>Second Email:'.$semail.'</strong></div><br>
                                                                <div><strong>Url:'.$message.'</strong></div><br>										
                                                            </div>
                                                        </div>
                                                        </body>
                                                     </html>';
                                        $headers  = "From: $email\r\n"; 
                                        $headers .= "Content-type: text/html\r\n"; 
                                                                
									 mail($address, $subject, $message, $headers); 
                                ?> 
                                 <script>
                                    alert("Your Mail Sucessefully Send");
                                    </script>
                                    <?php
                        
                     
                    ?> 
 
 
 
                                    <script> window.location = '../become-an-affiliate.html';</script>   