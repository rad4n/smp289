<?=$this->layout('index');?>

		<div class="container" id="page">
			<div class="container-inner">
				<div class="main">
					<div class="main-inner group">
						<section class="content">
							<div class="page-title pad group">
								<ul class="meta-single group">
									<li class="category">
										<a href="<?=BASE_URL;?>" rel="category tag"><?=$this->e($front_home);?></a>
										<span>/</span>
										<a href="<?=BASE_URL.'/contact';?>" rel="category tag"><?=$this->e($front_contact);?></a>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<article class="post-2212 post type-post status-publish format-image has-post-thumbnail hentry category-music post_format-post-format-image">
									<div class="post-inner group">
										<h1 class="post-title entry-title"><?=$this->e($front_contact);?></h1>
										<div class="clear"></div>
										<div class="entry themeform share">
											<div class="entry-inner">
												<address>
													<?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?>
												</address>
												<abbr title="Phone Number"><strong>Phone:</strong></abbr> <?=$this->pocore()->call->posetting[6]['value'];?><br>
												<abbr title="Fax"><strong>Fax:</strong></abbr> <?=$this->pocore()->call->posetting[7]['value'];?><br>
												<abbr title="Email Address"><strong>Email:</strong></abbr> <?=$this->pocore()->call->posetting[5]['value'];?>
											</div>
										</div>
									</div>
								</article>
							</div>
						</section>
						<div class="sidebar s1">
							<!-- Insert Right Sidebar -->
							<?=$this->insert('rsidebar');?>
						</div>
					</div>
				</div>
			</div>
		</div>