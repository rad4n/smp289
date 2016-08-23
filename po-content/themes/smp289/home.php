<?=$this->layout('index');?>
<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="slider">
						<script src="<?=$this->asset('/js/responsiveslides.min.js');?>"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide rslides rslides1" id="conference-slider">
								<?php
									$headlines = $this->post()->getHeadline('4', 'DESC', WEB_LANG_ID);
									$n=0;
									foreach($headlines as $headline){
								?>
							  <li <?php echo ($n==3)?'class="rslides1_on"':'class=""';?> style="<?php echo ($n==0)?'display: block;':'display: list-item;';?> <?php echo ($n==3)?'float: left;':'float: none;';?> position: <?php echo ($n==3)?'relative':'absolute';?>; <?php echo ($n==3)?'opacity: 1;':'opacity:0;';?> z-index: <?php echo ($n==3)?'2':'1';?>; transition: opacity 500ms ease-in-out 0s;" id="rslides1_s<?=$n;?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$headline['picture'];?>" alt=""/></li>
							 <?php $n++;}?>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul class="rslides_tabs rslides1_tabs" id="slider3-pager">
								<?php $n=1; foreach($headlines as $headline){?>
							  <li class="rslides1_s<?=$n;?> <?php echo ($n==4)?'rslides_here':'';?>"><a href="#"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?>" alt=""></a></li>
							  <?php $n++;}?>
							</ul>
							<div class="breaking-news-title">
								<p>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </p>
							</div>
						</div> 
					</div>	
				<div class="posts">
					<div class="left-posts">
						<?php 
							$db = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);
							$result = mysqli_query($db,"SELECT id_category from category WHERE active=1");
							while($row = mysqli_fetch_assoc($result)) {	
							$category_title = $this->category()->getOneCategory($row['id_category'], WEB_LANG_ID);
						?>
						<div class="latest-articles">
							<div class="main-title-head">
								<h3><?=$category_title['title'];?></h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<?php
									$post_by_categorys = $this->post()->getPostByCategory($row['id_category'], '3', 'DESC', WEB_LANG_ID);
									foreach($post_by_categorys as $list_post){
								?>
								<div class="world-news-grid">
									<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post['picture'];?>" alt="">
									<a href="singlepage.html" class="title"><?=$list_post['title'];?></a>
									<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post['content'], '70');?></p>
									<a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>">Read More</a>
								</div>
								<?php }?>
								
								<div class="clearfix"></div>
							</div>
						</div>
						<?php }?>
						<div class="gallery">
							<div class="main-title-head">
								<h3>gallery</h3>
								<a href="#">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
								  	<ul style="left: -186.667px;" class="nbs-flexisel-ul" id="flexiselDemo1">
								  	<?php
								  		$album = array(1,2);
										$gallerys = $this->gallery()->getAllGallery('id_gallery DESC',12);
										foreach($gallerys as $gal){
									?>	
								 		<li style="width: 186.667px;" class="nbs-flexisel-item">
											<a href="single.html"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$gal['picture'];?>" alt=""></a>
										</li>
										<?php }?>
									</ul><div style="top: 30px;" class="nbs-flexisel-nav-left"></div><div style="top: 30px;" class="nbs-flexisel-nav-right"></div></div></div>
							 	</div>
							 <link rel="stylesheet" href="<?=$this->asset('/css/flexslider.css');?>" type="text/css" media="screen">
								<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="<?=$this->asset('/js/jquery.flexisel.js');?>"></script>
						 </div>
							</div>
					</div>
					<div class="right-posts">
						<div class="desk-grid">
							<h3>FROM   THE   desk</h3>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
						<div class="editorial">
							<h3>editorial</h3>
							<div class="editor">
								<a href="single.html"><img src="images/e1.jpg" alt=""></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e2.jpg" alt=""></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e1.jpg" alt=""></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e3.jpg" alt=""></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				<div class="col-md-3 side-bar">
					<div class="videos">
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="video-grid">
							<div class="video">
								<a href="single.html"><i class="play"></i></a>
							</div>
							<div class="video-name">
								<a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
							</div>
							<div class="clearfix"></div>
						</div>
						<a class="more1" href="single.html">More  +</a>
						<div class="clearfix"></div>
					</div>
					<div class="sign_up text-center">
						<h3>Sign  Up  for    Newsletter</h3>
						<p class="sign">Sign up to receive our free newsletters!</p>
						<form>
							<input class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" type="text">
							<input class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" type="text">
							<input value="submit" type="submit">
						</form>
						<p class="spam">We do not spam. We value your privacy!</p>
					</div>
					<div class="clearfix"></div>
					<div class="popular">
						<div class="main-title-head">
							<h5>popular</h5>
							<h4> Most    read</h4>
							<div class="clearfix"></div>
						</div>		
						<div class="popular-news">
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<div class="popular-grid">
								<i>Sept 24th 2011 </i>
								<p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit  <a href="singlepage.html">Read More</a></p>
							</div>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
					</div>
					<div class="subscribe-now">
						<div class="discount">
							<a href="#">
								<div class="save">
									<p>Save</p>
									<p>upto</p>
								</div>
								<div class="percent">
									<h2>50%</h2>
								</div>
								<div class="clearfix"></div>
						</a></div><a href="#">						
						<h3 class="sn">subscribe     now</h3>
							</a>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="clearfix"></div>
			</div>
