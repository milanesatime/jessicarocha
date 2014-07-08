<footer>
  <div class="row-fluid">
    <div class="span5 pull-left">
      <h4 class="title">Services</h4>
      <ul>
        <li>Customized Wordpress Themes</li>
        <li>Valid HTML5/CSS3</li>
        <li>SEO Optimized, Search Engine Friendly</li>
        <li>Social Media Consultant</li>
        <li>Marketing Materials and Branding</li>
      </ul>
    </div>
    <!--/span-->
    
    <div class="span2 pull-left">
      <h4 class="title">Follow Me!</h4>
      <p><br />
        <a href="http://twitter.com/hijessrocha" target="_blank"><img src="assets/images/twitter-2.png" alt="twitter-2" width="24" height="24"> @hijessrocha</a><br />
        <a href="http://facebook.com/hijessrocha" target="_blank"><img src="assets/images/facebook.png" alt="facebook" width="24" height="24"> /hijessrocha</a><br />
    </div>
  </div>
  <!--.row--> 
  <!--FB Like Button -->
  <div id="fb-root"></div>
	<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '454725554542353', // App ID from the App Dashboard
      channelUrl : '//www.jessicarocha.com', // Channel File for x-domain communication
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });

    // Additional initialization code such as adding Event Listeners goes here

  };

  // Load the SDK's source Asynchronously
  // Note that the debug version is being actively developed and might 
  // contain some type checks that are overly strict. 
  // Please report such bugs using the bugs tool.
  (function(d, debug){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
     ref.parentNode.insertBefore(js, ref);
   }(document, /*debug*/ false));
   </script>

  <div class="fb-like" data-href="https://www.facebook.com/hijessrocha" data-send="false" data-layout="button_count" data-width="20" data-show-faces="false" data-font="arial"></div>
  <br />
  <!--Twitter Tweet Button --> 
  <a class="twitter-share-button" href="https://twitter.com/share" data-url="https://www.facebook.com/hijessrocha">Tweet</a> 
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <br />
  <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fjessicarocha.com%2F"><img src="assets/images/I_heart_validator.png" alt="I_heart_validator" width="80" height="15"></a> </footer>
</div>
<hr />
<p class="center">&copy; <?php print(Date("Y")); ?> Jessica Rocha Lim, All Rights Reserved</p>
<!--.container-fluid--> 

<!--jQuery--> 
<script type="text/javascript" src="assets/js/jquery.min.js"></script> 
<!--le JS--> 
<script type="text/javascript" src="assets/js/bootstrap.js"></script> 
<script type="text/javascript" src="assets/js/noisegen-0.1.2.js"></script> 
<script type="text/javascript" src="assets/js/noisegen.js"></script> 
<script type="text/javascript" src="assets/js/jquery.colorbox-min.js"></script> 
<script type="text/javascript">
	$("#previews a").click(function() {
     $('html, body').animate({
         scrollTop: $("#header").offset().top
     }, 100);
 });
</script> 
<script>
	$(document).ready(function(){
		$(".inline").colorbox({inline:true, width:"50%"});
	});
</script>
</body></html>