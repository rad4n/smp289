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
										<a href="<?=BASE_URL.'/pages/'.$this->e($pages['seotitle']);?>" rel="category tag"><?=$this->e($front_pages);?></a>
										<span>/</span>
										<?=$this->e($pages['title']);?>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<article class="post type-post status-publish format-image has-post-thumbnail hentry category-music post_format-post-format-image">
									<div class="post-inner group">
										<h1 class="post-title entry-title"><?=$this->e($pages['title']);?></h1>
										<?php if ($this->e($pages['picture']) != '') { ?>
										<div class="post-format">
											<div class="image-container">
												<img width="720" height="340" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" data-src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" class="attachment-thumb-large size-thumb-large wp-post-image" alt="Man with guitar." data-srcset="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?> 720w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?> 520w" sizes="(max-width: 720px) 100vw, 720px" />
											</div>
										</div>
										<?php } ?>
										<div class="clear"></div>
										<div class="entry themeform share">
											<div class="entry-inner">
												<?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
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