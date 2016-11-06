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
									</li>
								</ul>
							</div>
							<div class="pad group">
								<div class="post-list group">
									<div class="post-row">
									<?php
										$albums = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
										foreach($albums as $alb){
									?>
										<article class="group grid-item post type-post status-publish format-image has-post-thumbnail hentry category-mixed tag-algae tag-detox tag-smoothie post_format-post-format-image">
											<div class="post-inner post-hover">
												<div class="post-thumbnail">
													<a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>" title="<?=$alb['title'];?>" class="">
														<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?>" class="attachment-thumb-medium size-thumb-medium wp-post-image tc-smart-loaded" alt="<?=$alb['title'];?>" sizes="(max-width: 520px) 100vw, 520px" style="display: block;" srcset="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?> 520w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$alb['picture'];?> 720w" width="520" height="245">
													</a>
													<h2 class="post-title entry-title">
														<a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>" rel="bookmark" title="<?=$alb['title'];?>"><?=$alb['title'];?></a>
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
											<?=$this->gallery()->getAlbumPaging('8', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
										</ul>
									</div>
								</nav>
							</div>
						</section>
						<div class="sidebar s1">
							<!-- Insert Left Sidebar -->
							<?=$this->insert('lsidebar');?>
						</div>
						<div class="sidebar s2">
							<!-- Insert Right Sidebar -->
							<?=$this->insert('rsidebar');?>
						</div>
					</div>
				</div>
			</div>
		</div>