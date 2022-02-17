 
 
  <?php 
                                    
                           $name=$_POST['name'];
					     $lname=$_POST['lname'];
						 $contact=$_POST['contact'];
						 $phone=$_POST['phone'];
						  $state =$_POST['state'];
                        $from=$_POST['email'];	
                        $to =  'alex@ztransfers.com';
                        $message=$_POST['message'];	
						$subject = 'You\'ve been contacted by ' . $name . '.';	
                         $message .=	'<html>     	<head>
                                                        </head>
                                                        <body>
                                                        <div id="main" style="background-color:#a1ddf5; width:379px;padding: 10px 10px 64px 13px;">
                                                             
                                                             <div id="main_in" style="background-color:#FEFFE8;width: 362px;border-radius: 20px;padding: 26px 0px 70px 15px;">
                                                                <p> Zythum Infosys </p>											
                                                                <div><strong>Name:'.$name.'</strong></div><br>
																<div><strong>Last Name:'.$lname.'</strong></div><br>
																<div><strong>Contact Person:'.$contact.'</strong></div><br>
																<div><strong>phone:'.$phone.'</strong></div><br>
																
                                                              <div><strong>state:'.$state.'</strong></div><br>
																 <div><strong>Email:'.$from.'</strong></div><br>
                                                                <div><strong>Message:'.$message.'</strong></div><br>										
                                                            </div>
                                                        </div>
                                                        </body>
                                                     </html>';
                                        $headers  = "From: $from\r\n"; 
                                        $headers .= "Content-type: text/html\r\n"; 
                                         mail($to, $subject, $message, $headers); 
                                ?> 
                                 <script>
                                    alert("Your Mail Sucessefully Send");
                                    </script>
                                    <?php
                        
                     
                    ?> 
 
 
 
                                    <script> window.location = '../buy-leads-order-form.html';</script>     
 
             