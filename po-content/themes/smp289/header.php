<div class="header">
				<div class="header-left">
					<div class="logo">
						
					</div>
				</div>
					
					<div class="clearfix"><a href="index.html">
							<h6></h6>
							<h1>SMPN <span>289</span></h1>
						</a></div>
				<div class="header-right">
					<!---pop-up-box---->  
					<link href="<?=$this->asset('/css/popuo-box.css');?>" rel="stylesheet" type="text/css" media="all">
					<script src="<?=$this->asset('/js/jquery.magnific-popup.js');?>" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<input value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" type="text">
							<div class="clearfix"></div>
							<input value="Subscribe Now" type="submit">
						</div>
					</div>	

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
					<div class="search">
						<form>
							<input value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" type="text">
							<input value="" type="submit">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<?php
						echo $this->menu()->getFrontMenu(WEB_LANG, '', '', '','','');
				?>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>