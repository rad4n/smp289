							<!-- Insert sidebar script here -->
							<a class="sidebar-toggle" title="Expand Sidebar"><i class="fa icon-sidebar-toggle"></i></a>
							<div class="sidebar-content">
								<?php if ($this->e($social_mod) == 'Home' || $this->e($social_mod) == 'Beranda') { ?>
								<div class="sidebar-top group">
									<p>More</p>
								</div>
								<?php } else { ?>
								<div class="sidebar-top group" style="background-color: #d31c1c;">
									<p>More</p>
								</div>
								<?php } ?>
							</div>

							<div id="search-2" class="widget widget_search">
								<form class="searchform themeform" action="<?=BASE_URL;?>/search" method="post">
									<div>
										<input type="text" class="search" name="search" onblur="if(this.value=='')this.value='<?=$this->e($front_search);?>...';" onfocus="if(this.value=='<?=$this->e($front_search);?>...')this.value='';" value="<?=$this->e($front_search);?>..." />
									</div>
								</form>
							</div>

							<div id="text-2" class="widget widget_text">
								<div class="textwidget">
									<img class="aligncenter" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/ad-square.png" alt="" />
								</div>
							</div>

							<div id="alxposts-3" class="widget widget_hu_posts">
								<h3 class="widget-title"><?=$this->e($front_popular);?></h3>
								<ul class="alx-posts group thumbs-enabled">
								<?php
									$populars_side = $this->post()->getPopular('3', 'DESC', WEB_LANG_ID);
									foreach($populars_side as $popular_side){
								?>
									<li>
										<div class="post-item-thumbnail">
											<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_side);?>" title="<?=$popular_side['title'];?>">
												<img width="520" height="245" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_side['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_side['picture'];?>" class="attachment-thumb-medium size-thumb-medium wp-post-image" alt="<?=$popular_side['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$popular_side['picture'];?> 520w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$popular_side['picture'];?> 300w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$popular_side['picture'];?> 768w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$popular_side['picture'];?> 1024w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$popular_side['picture'];?> 720w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$popular_side['picture'];?> 1280w" sizes="(max-width: 520px) 100vw, 520px" />
											</a>
										</div>
										<div class="post-item-inner group">
											<p class="post-item-category"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_side);?>#comments" rel="comment"><?=$this->post()->getCountComment($popular_side['id_post']);?> <?=$this->e($front_comment);?></a></p>
											<p class="post-item-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_side);?>" rel="bookmark" title="<?=$popular_side['title'];?>"><?=$popular_side['title'];?></a></p>
											<p class="post-item-date"><?=$this->pocore()->call->podatetime->tgl_indo($popular_side['date']);?></p>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>

							<div id="alxtabs-3" class="widget widget_hu_tabs">
								<h3 class="widget-title"><?=$this->e($front_comment);?></h3>
								<div class="alx-tabs-container">
									<ul id="tab-comments-3" class="alx-tab group avatars-enabled">
									<?php
										$comments_side = $this->post()->getComment('5', 'DESC');
										foreach($comments_side as $comment_side){
										$comment_post = $this->post()->getPostById($comment_side['id_post'], WEB_LANG_ID);
									?>
										<li>
											<div class="tab-item-avatar">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post);?>#comment">
													<img alt='<?=$comment_side['name'];?>' src='<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_avatar.jpg' srcset='<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_avatar.jpg 2x' class='avatar avatar-96 photo' height='96' width='96' />
												</a>
											</div>
											<div class="tab-item-inner group">
												<div class="tab-item-name"><?=$comment_side['name'];?> :</div>
												<div class="tab-item-comment"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post);?>#comment"><?=$this->pocore()->call->postring->cuthighlight('post', $comment_side['comment'], '50');?>...</a></div>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>