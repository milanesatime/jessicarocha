<?php include_once("includes/header.php"); ?>
 
<!-- Modal -->
<div id="hireme" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="hireme" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Hire Me!</h3>
	</div>
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
		  echo "<form method='post' action='index.php'>
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
<!--accordion items-->

<div class="accordion" id="proj">
  <div class="accordion-group">
    <div id="main-proj" class="row-fluid accordion-body collapse in">
      <?php include_once("projects/featured.php"); ?>
      <div class="span5" id="about-me">
        <h3 class="title">About Me</h3>
        <img src="assets/images/about-me.png" alt="about-me" width="169" height="169" class="img-polaroid pull-left">
        <p>My aim as a developer is to create aesthetically pleasing, cross-browser compatible, valid code. All of my sites are W3C validated HTML5 and search engine optimized. My goal is to ensure that my client is happy with my work which is completed on time or ahead of schedule.</p>
        <p>I'm an NYC resident and Hunter College graduate with a BA in Media Studies. I've been coding since the good old days when <code>&#60;blink&#62;</code> tags were acceptable and there was no such thing as CSS. I always strive to keep up to date with new standards and practices and enjoy challenging myself.</p>
        <p><strong>Contact me: </strong><br>
          <img src="assets/images/email.png" alt="email" width="24" height="24"><a href="mailto:mail@jessicarocha">mail@jessicarocha.com</a><br>
          <a href="http://www.linkedin.com/in/jessrocha/"><img src="assets/images/linkedin.png" alt="linkedin" width="24" height="24">@jessrocha</a><br>
          <img src="assets/images/skype.png" alt="skype" width="24" height="24"><a href="skype:hijessrocha?call">@hijessrocha</a></p>
        <p><strong>Download my resumé: </strong><a href="assets/docs/jessicarocha_resume.pdf"><img src="assets/images/pdficon_large.png" alt="pdficon_large" width="32" height="32"></a></p>
      </div>
      <!--.span--> 
    </div>
    <!--.row-fluid-->
  </div>
  <!--.accordion group-->
  <h3 class="title">Recent Work</h3>
  <?php include_once("projects/proj-1.php"); ?>
  <?php include_once("projects/proj-2.php"); ?>
  <?php include_once("projects/proj-3.php"); ?>
</div>
<!--end accordion items-->
<div class="row-fluid" id="previews">
  <div class="span4">
    <h4>Reality Teen</h4>
    <p><img src="assets/images/projects/reality-teen/rt-preview.png" class="img-polaroid" alt="Reality Teen"></p>
    <p><a class="btn accordion-toggle" data-toggle="collapse" data-parent="#proj" href="#proj-1">More &raquo;</a></p>
  </div>
  <!--/span-->
  <div class="span4">
    <h4>Natalia Nakazawa</h4>
    <p><img src="assets/images/projects/natalia-nakazawa/nn-preview.png" class="img-polaroid" alt="Natalia Nakazawa"></p>
    <p><a class="btn accordion-toggle" data-toggle="collapse" data-parent="#proj" href="#proj-2">More &raquo;</a></p>
  </div>
  <!--/span-->
  <div class="span4">
    <h4>Fred Harper</h4>
    <p><img src="assets/images/projects/fred-harper/fh-preview.png" class="img-polaroid" alt="Fred Harper"></p>
    <p><a class="btn accordion-toggle" data-toggle="collapse" data-parent="#proj" href="#proj-3">More &raquo;</a></p>
  </div>
  <!--/span--> 
</div>
<!--.row-->
<?php include_once("includes/footer.php"); ?>
