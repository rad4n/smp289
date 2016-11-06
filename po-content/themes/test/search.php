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
										<?=$this->e($front_search_title);?>
										<span>/</span>
										<a href="<?=$this->e($social_url);?>" rel="category tag"><?=$this->e($page_title);?></a>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<div id="grid-wrapper" class="post-list group">
									<div class="post-row">
									<?php
										$search = $this->post()->getPostFromSearch('6', 'post.id_post DESC', $this->e($query), $this->e($page), WEB_LANG_ID);
										foreach($search as $post){
											$get_category = $this->category()->getCategory($post['id_post'], WEB_LANG_ID);
									?>
										<article class="group grid-item post type-post status-publish format-video has-post-thumbnail hentry post_format-post-format-video">
											<div class="post-inner post-hover">
												<div class="post-thumbnail">
													<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" title="<?=$post['title'];?>">
														<img width="520" height="245" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" class="attachment-thumb-medium size-thumb-medium wp-post-image" alt="<?=$post['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?> 520w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?> 720w" sizes="(max-width: 520px) 100vw, 520px" /> <span class="thumb-icon"><i class="fa fa-play"></i></span>
													</a>
													<a class="post-comments" href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>#comments"><span><i class="fa fa-comments-o"></i><?=$this->post()->getCountComment($post['id_post']);?></span></a>
												</div>
												<div class="post-meta group">
													<p class="post-category"><?=$get_category;?></p>
													<p class="post-date"><time class="published updated" datetime="<?=$post['date'];?>"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></time></p>
													<p class="post-byline" style="display:none">
														&nbsp;By <span class="vcard author"><span class="fn"><a href="<?=BASE_URL;?>/member/profile/<?=$this->post()->getAuthor($post['editor'])['username'];?>" title="<?=$this->post()->getAuthorName($post['editor']);?>" rel="author"><?=$this->post()->getAuthorName($post['editor']);?></a></span></span>
														&middot; Published <span class="published"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
													</p>
												</div>
												<h2 class="post-title entry-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" rel="bookmark" title="<?=$post['title'];?>"><?=$post['title'];?></a></h2>
												<div class="entry excerpt entry-summary">
													<p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '200');?>...</p>
												</div>
											</div>
										</article>
									<?php } ?>
									</div>
								</div>
								<nav class="pagination group" style="width:100%;">
									<div class="wp-pagenavi">
										<ul class="pagination" style="margin:0 auto;">
											<?=$this->post()->getSearchPaging('6', $this->e($query), $this->e($page), WEB_LANG_ID, '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
										</ul>
									</div>
								</nav>
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