<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- Le CSS -->
<link href="../assets/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
	<div id="hireme">
		<div class="row-fluid">
    		<div class="modal-header"><h3>Hire Me!</h3></div>
        		<div id="inline_content">
	        		<div class="modal-body">
		        		<p>Interested in working with me?  Tell me a little about yourself and your goals for your project and I'll get back to you as soon as I can.</p>
			        	<?php
						if (isset($_REQUEST['email']))
						//if "email" is filled out, send email
						  {
						  //send email
						  $name = $_REQUEST['name'] ;
						  $email = $_REQUEST['email'] ;
						  $subject = $_REQUEST['subject'] ;
						  $message = $_REQUEST['message'] ;
						  mail("mail@jessicarocha.com", $subject,
						  $message, "From:" . $email);
						  echo "Thank you!";
						  }
						else
						//if "email" is not filled out, display the form
						  {
						  echo "<form method='post' action='form.php'>
						  </form>
						  <form class='form' id='hire-form'>
						      <div class='control-group'>
						        <label class='control-label'>Name</label>
						        <div class='controls'>
						          <input type='text' name='name' placeholder='Name'>
						        </div>
						      </div>
						      <div class='control-group'>
						        <label class='control-label'>Email</label>
						        <div class='controls'>
						          <input type='text' name='email' placeholder='Email'>
						        </div>
						      </div>
						      <div class='control-group'>
						        <div class='controls'>
						          <textarea rows='3' name='message' placeholder='Tell me a little about your project.'></textarea>
						        </div>
						      </div>
						      <div class='control-group'>
						        <div class='controls'>
						          <input type='hidden' name='subject' value='Message from JessicaRocha.com'>
						          <button type='submit' class='btn'>Submit</button>
						        </div>
						      </div>
						    </form>";
						  }
						?>
					</div>
				<div class="modal-footer"></div>
        	</div>
		</div>
	</div>
</body></html>
