		<!-- Insert footer script here -->
		<footer id="footer">
			<section class="container" id="footer-widgets">
				<div class="container-inner">
					<div class="pad group">
						<div class="footer-widget-1 grid one-third ">
							<div id="recent-posts-3" class="widget widget_recent_entries">
								<h3 class="widget-title"><?=$this->e($front_recent);?></h3>
								<ul>
								<?php
									$recents_foot = $this->post()->getRecent('4', 'DESC', WEB_LANG_ID);
									foreach($recents_foot as $recent_foot){
								?>
									<li>
										<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $recent_foot);?>"><?=$recent_foot['title'];?></a>
									</li>
								<?php } ?>
								</ul>
							</div>
						</div>
						<div class="footer-widget-2 grid one-third ">
							<div id="recent-comments-3" class="widget widget_recent_comments">
								<h3 class="widget-title"><?=$this->e($front_comment);?></h3>
								<ul id="recentcomments">
								<?php
									$comments_side = $this->post()->getComment('5', 'DESC');
									foreach($comments_side as $comment_side){
									$comment_post = $this->post()->getPostById($comment_side['id_post'], WEB_LANG_ID);
								?>
									<li class="recentcomments">
										<span class="comment-author-link"><?=$comment_side['name'];?></span> : <a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $comment_post);?>#comment"><?=$this->pocore()->call->postring->cuthighlight('post', $comment_side['comment'], '80');?>...</a>
									</li>
								<?php } ?>
								</ul>
							</div>
						</div>
						<div class="footer-widget-3 grid one-third last">
							<div id="alxtabs-4" class="widget widget_hu_tabs">
								<h3 class="widget-title"><?=$this->e($front_popular);?></h3>
								<div class="alx-tabs-container">
									<ul id="tab-popular-4" class="alx-tab group thumbs-enabled">
									<?php
										$populars_foot = $this->post()->getPopular('2', 'DESC', WEB_LANG_ID);
										foreach($populars_foot as $popular_foot){
									?>
										<li>
											<div class="tab-item-thumbnail">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_foot);?>" title="<?=$popular_foot['title'];?>">
													<img width="160" height="160" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_foot['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_foot['picture'];?>" class="attachment-thumb-small size-thumb-small wp-post-image" alt="<?=$popular_foot['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_foot['picture'];?> 160w, <?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_foot['picture'];?> 150w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$popular_foot['picture'];?> 320w" sizes="(max-width: 160px) 100vw, 160px" /> <span class="thumb-icon small"><i class="fa fa-play"></i></span>
												</a>
											</div>
											<div class="tab-item-inner group">
												<p class="tab-item-category"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_foot);?>#comments" rel="comments"><?=$this->post()->getCountComment($popular_foot['id_post']);?> <?=$this->e($front_comment);?></a></p>
												<p class="tab-item-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $popular_foot);?>" rel="bookmark" title="<?=$popular_foot['title'];?>"><?=$popular_foot['title'];?></a></p>
												<p class="tab-item-date"><?=$this->pocore()->call->podatetime->tgl_indo($popular_foot['date']);?></p>
											</div>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="container" id="footer-bottom">
				<div class="container-inner"><a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
					<div class="pad group">
						<div class="grid one-half">
							<img id="footer-logo" src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="">
							<div id="copyright">
								<p><?=$this->pocore()->call->posetting[0]['value'];?> &copy; <?=date('Y');?>. All Rights Reserved.</p>
							</div>
							<div id="credit" style="">
								<p>Powered by <a href="http://www.popojicms.org" target="_blank">PopojiCMS</a>. Theme by <a href="http://presscustomizr.com">Press Customizr</a>.</p>
							</div>
						</div>
						<div class="grid one-half last">
							<ul class="social-links">
								<li><a rel="nofollow" class="social-tooltip" title="Twitter" href="http://twitter.com/" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-twitter"></i></a></li>
								<li><a rel="nofollow" class="social-tooltip" title="Facebook" href="https://www.facebook.com/" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-facebook"></i></a></li>
								<li><a rel="nofollow" class="social-tooltip" title="Google+" href="javascript:void(0)" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-google"></i></a></li>
								<li><a rel="nofollow" class="social-tooltip" title="Dribbble" href="javascript:void(0)" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-dribbble"></i></a></li>
								<li><a rel="nofollow" class="social-tooltip" title="RSS Feed" href="<?=BASE_URL;?>/feed" target="_blank" style="color:rgba(255,255,255,0.7)"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</footer>