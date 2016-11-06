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
										<a href="<?=BASE_URL.'/404';?>" rel="category tag">404</a>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<article class="post-2212 post type-post status-publish format-image has-post-thumbnail hentry category-music post_format-post-format-image">
									<div class="post-inner group" style="text-align:center;">
										<h1 class="post-title entry-title" style="font-size:80px;">404</h1>
										<h3 class="post-title entry-title" style="font-size:30px;"><?=$this->e($front_404_text);?></h3>
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