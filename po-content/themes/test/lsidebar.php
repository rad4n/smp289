							<!-- Insert sidebar script here -->
							<a class="sidebar-toggle" title="Expand Sidebar"><i class="fa icon-sidebar-toggle"></i></a>
							<div class="sidebar-content">
								<div class="sidebar-top group">
									<p>Follow:</p>
									<ul class="social-links">
										<li><a rel="nofollow" class="social-tooltip" title="Twitter" href="http://twitter.com/" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-twitter"></i></a></li>
										<li><a rel="nofollow" class="social-tooltip" title="Facebook" href="https://www.facebook.com/" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-facebook"></i></a></li>
										<li><a rel="nofollow" class="social-tooltip" title="Google+" href="javascript:void(0)" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-google"></i></a></li>
										<li><a rel="nofollow" class="social-tooltip" title="Dribbble" href="javascript:void(0)" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-dribbble"></i></a></li>
										<li><a rel="nofollow" class="social-tooltip" title="RSS Feed" href="<?=WEB_URL;?>/feed" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>

							<div id="alxtabs-2" class="widget widget_hu_tabs">
								<h3 class="widget-title">Recommended</h3>
								<ul class="alx-tabs-nav group tab-count-2">
									<li class="alx-tab tab-recent"><a href="#tab-recent-2" title="<?=$this->e($front_recent);?>"><i class="fa fa-clock-o"></i><span><?=$this->e($front_recent);?></span></a></li>
									<li class="alx-tab tab-popular"><a href="#tab-popular-2" title="<?=$this->e($front_breaking_news);?>"><i class="fa fa-star"></i><span><?=$this->e($front_breaking_news);?></span></a></li>
								</ul>
								<div class="alx-tabs-container">
									<ul id="tab-recent-2" class="alx-tab group thumbs-enabled">
									<?php
										$recents_side = $this->post()->getRecent('7', 'DESC', WEB_LANG_ID);
										foreach($recents_side as $recent_side){
									?>
										<li>
											<div class="tab-item-thumbnail">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side);?>" title="<?=$recent_side['title'];?>">
													<img width="160" height="160" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?>" class="attachment-thumb-small size-thumb-small wp-post-image" alt="<?=$recent_side['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?> 160w, <?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?> 150w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$recent_side['picture'];?> 320w" sizes="(max-width: 160px) 100vw, 160px" /> <span class="thumb-icon small"><i class="fa fa-play"></i></span>
												</a>
											</div>
											<div class="tab-item-inner group">
												<p class="tab-item-category"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side);?>#comment" rel="comment"><?=$this->post()->getCountComment($recent_side['id_post']);?> <?=$this->e($front_comment);?></a></p>
												<p class="tab-item-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_side);?>" rel="bookmark" title="<?=$recent_side['title'];?>"><?=$recent_side['title'];?></a></p>
												<p class="tab-item-date"><?=$this->pocore()->call->podatetime->tgl_indo($recent_side['date']);?></p>
											</div>
										</li>
										<?php } ?>
									</ul>
									<ul id="tab-popular-2" class="alx-tab group thumbs-enabled">
									<?php
										$headlines = $this->post()->getHeadline('7', 'DESC', WEB_LANG_ID);
										foreach($headlines as $headline){
									?>
										<li>
											<div class="tab-item-thumbnail">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>" title="<?=$headline['title'];?>">
													<img width="160" height="160" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?>" class="attachment-thumb-small size-thumb-small wp-post-image" alt="<?=$headline['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?> 160w, <?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$headline['picture'];?> 150w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$headline['picture'];?> 320w" sizes="(max-width: 160px) 100vw, 160px" /> <span class="thumb-icon small"><i class="fa fa-play"></i></span>
												</a>
											</div>
											<div class="tab-item-inner group">
												<p class="tab-item-category"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>#comment" rel="comment"><?=$this->post()->getCountComment($headline['id_post']);?> <?=$this->e($front_comment);?></a></p>
												<p class="tab-item-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $headline);?>" rel="bookmark" title="<?=$headline['title'];?>"><?=$headline['title'];?></a></p>
												<p class="tab-item-date"><?=$this->pocore()->call->podatetime->tgl_indo($headline['date']);?></p>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>

							<div id="text-2" class="widget widget_text">
								<div class="textwidget">
									<img class="aligncenter" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/ad-square.png" alt="" />
								</div>
							</div>

							<div id="alxposts-2" class="widget widget_hu_posts">
								<h3 class="widget-title"><?=$this->e($front_gallery);?></h3>
								<ul class="alx-posts group thumbs-enabled">
								<?php
									$gallerys = $this->gallery()->getAllGallery('id_gallery DESC', '1');
									foreach($gallerys as $gal){
								?>
									<li>
										<div class="post-item-thumbnail">
											<a href="<?=BASE_URL;?>/album" title="<?=$gal['title'];?>">
												<img width="520" height="245" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" data-src="" class="attachment-thumb-medium size-thumb-medium wp-post-image" alt="<?=$gal['title'];?>" data-srcset="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?> 520w, <?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?> 300w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?> 768w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?> 1024w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?> 720w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?> 1280w" sizes="(max-width: 520px) 100vw, 520px" /> <span class="thumb-icon small"><i class="fa fa-play"></i></span>
											</a>
										</div>
										<div class="post-item-inner group">
											<p class="post-item-title"><a href="<?=BASE_URL;?>/album" rel="bookmark" title="<?=$gal['title'];?>"><?=$gal['title'];?></a></p>
										</div>
									</li>
								<?php } ?>
								</ul>
							</div>