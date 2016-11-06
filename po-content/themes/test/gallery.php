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
										<a href="<?=BASE_URL.'/album';?>" rel="category tag"><?=$this->e($front_gallery);?></a>
										<span>/</span>
										<?=$this->e($page_title);?>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<div class="post-list group">
									<div id="gallery-1" class="post-row">
									<?php
										$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
										foreach($gallerys as $gal){
									?>
										<article class="group grid-item post type-post status-publish format-image has-post-thumbnail hentry category-mixed tag-algae tag-detox tag-smoothie post_format-post-format-image" style="width:33.333%;">
											<div class="post-inner post-hover">
												<div class="post-thumbnail">
													<a href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>" title="<?=$gal['title'];?>" class="" data-rel="lightbox-gallery-1">
														<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" class="attachment-thumb-medium size-thumb-medium wp-post-image tc-smart-loaded" alt="<?=$gal['title'];?>" sizes="(max-width: 520px) 100vw, 520px" style="display: block;" srcset="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?> 520w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?> 720w" width="520" height="245">
													</a>
													<h2 class="post-title entry-title" style="font-size:20px; text-align:center;">
														<a href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>" rel="bookmark" title="<?=$gal['title'];?>" data-rel="lightbox-gallery-1"><?=$gal['title'];?></a>
													</h2>
												</div>
											</div>
										</article>
										<?php } ?>
									</div>
								</div>
								<nav class="pagination group" style="width:100%;">
									<div class="wp-pagenavi">
										<ul class="pagination" style="margin:0 auto;">
											<?=$this->gallery()->getGalleryPaging('12', $album, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
										</ul>
									</div>
								</nav>
							</div>
						</section>
						<div class="sidebar s1">
							<!-- Insert Left Sidebar -->
							<?=$this->insert('rsidebar');?>
						</div>
					</div>
				</div>
			</div>
		</div>