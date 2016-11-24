<?=$this->layout('index');?>

		<div class="container" id="page">
			<div class="container-inner">
				<div class="main">
					<div class="main-inner group">
						<section class="content">
							<div class="page-title pad group">
								<h2><?=$this->e($front_breaking_news);?></h2>
							</div>
							<div class="pad group">
								<script type="text/javascript">
									jQuery(function($) {
										var firstImage = $('#flexslider-featured').find('img').filter(':first'),
											checkforloaded = setInterval(function() {
												var image = firstImage.get(0);
												if (image.complete || image.readyState == 'complete' || image.readyState == 4) {
													clearInterval(checkforloaded);
													$.when($('#flexslider-featured').flexslider({
														animation: "slide",
														useCSS: false,
														directionNav: true,
														controlNav: true,
														pauseOnHover: true,
														animationSpeed: 400,
														smoothHeight: true,
														touch: 1,
														slideshow: false,
														slideshowSpeed: 3000,
														start:function(slider){slider.play();}   
													})).done(function() {
														var $_self = $(this);
														_trigger = function($_self) {
															$_self.trigger('featured-slider-ready');
														};
														_trigger = _.debounce(_trigger, 100);
														_trigger($_self);
													});
												}
											}, 20);
									});
								</script>
								<div class="featured flexslider" id="flexslider-featured">
									<ul class="slides">
									<?php
										$sliders_post = $this->post()->getPost('6', 'DESC', WEB_LANG_ID);
										foreach($sliders_post as $slider_post){
										$slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
									?>
										<li>
											<article class="group post type-post status-publish format-gallery has-post-thumbnail hentry category-featured tag-hueman tag-theme post_format-post-format-gallery">
												<div class="post-inner post-hover">
													<div class="post-thumbnail">
														<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post);?>" title="<?=$slider_post['title'];?>">
															<img width="720" height="340" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" class="attachment-thumb-large size-thumb-large wp-post-image" alt="<?=$slider_post['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?> 720w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$slider_post['picture'];?> 300w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?> 768w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?> 1024w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$slider_post['picture'];?> 520w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?> 1280w" sizes="(max-width: 720px) 100vw, 720px" />
														</a>
														<a class="post-comments" href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post);?>#comments"><span><i class="fa fa-comments-o"></i><?=$this->post()->getCountComment($slider_post['id_post']);?></span></a>
													</div>
													<div class="post-meta group">
														<p class="post-category"><?=$slider_category;?></p>
														<p class="post-date">
															<time class="published updated" datetime="<?=$slider_post['date'];?>"><?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></time>
														</p>
														<p class="post-byline" style="display:none">
															&nbsp;by <span class="vcard author"><span class="fn"><a href="<?=BASE_URL;?>/member/profile/<?=$this->post()->getAuthor($slider_post['editor'])['username'];?>" title="<?=$this->post()->getAuthorName($slider_post['editor']);?>" rel="author"><?=$this->post()->getAuthorName($slider_post['editor']);?></a></span></span>
															&middot; Published <span class="published"><?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></span>
														</p>
													</div>
													<h2 class="post-title entry-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $slider_post);?>" rel="bookmark" title="<?=$slider_post['title'];?>"><?=$slider_post['title'];?></a></h2>
													<div class="entry excerpt entry-summary">
														<p><?=$this->pocore()->call->postring->cuthighlight('post', $slider_post['content'], '100');?>...</p>
													</div>
												</div>
											</article>
										</li>
									<?php } ?>
									</ul>
								</div>
								<div id="grid-wrapper" class="post-list group">
								<?php
									$nohome = 1;
									$getpage = (isset($_GET['page']) ? $this->pocore()->call->postring->valid($_GET['page'], 'sql') : '1');
									$offset = $this->pocore()->call->popaging->searchPosition('6', $getpage);
									$posthome = $this->pocore()->call->podb->from('post')
										->select(array('post_description.title', 'post_description.content'))
										->leftJoin('post_description ON post_description.id_post = post.id_post')
										->where('post_description.id_language', WEB_LANG_ID)
										->where('post.active', 'Y')
										->where('post.publishdate < ?', date('Y-m-d H:i:s'))
										->orderBy('post.id_post DESC')
										->limit($offset.',6')
										->fetchAll();
									$categorys = $this->post()->arrayOrderBy($posthome, 'id_post', SORT_DESC);
									foreach($categorys as $post){
										$get_category = $this->category()->getCategory($post['id_post'], WEB_LANG_ID);
										if ($nohome%2 == 1) {
											echo '<div class="post-row">';
										}
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
												<p class="post-category"><?=$get_category;?> - <a href="javascript:void(0)" rel="category tag"><?=$post['hits'];?> Hits</a></p>
												<p class="post-date"><time class="published updated" datetime="<?=$post['date'];?>"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></time></p>
												<p class="post-byline" style="display:none">
													&nbsp;By <span class="vcard author"><span class="fn"><a href="<?=BASE_URL;?>/member/profile/<?=$this->post()->getAuthor($post['editor'])['username'];?>" title="<?=$this->post()->getAuthorName($post['editor']);?>" rel="author"><?=$this->post()->getAuthorName($post['editor']);?></a></span></span>
													&middot; Published <span class="published"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
												</p>
											</div>
											<h2 class="post-title entry-title"><a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $post);?>" rel="bookmark" title="<?=$post['title'];?>"><?=$post['title'];?></a></h2>
											<div class="entry excerpt entry-summary">
												<p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '100');?>...</p>
											</div>
										</div>
									</article>
								<?php
										if ($nohome%2 == 0) {
											echo "</div>";
										}
										$nohome++;
									}
									if ($nohome%2 != 1) echo "</div>";
								?>
								</div>
								<nav class="pagination group" style="width:100%;">
									<div class="wp-pagenavi">
										<ul class="pagination" style="margin:0 auto;">
											<?php
												$totaldata = $this->pocore()->call->podb->from('post')->where('active', 'Y')->where('publishdate < ?', date('Y-m-d H:i:s'))->count();
												$totalpage = $this->pocore()->call->popaging->totalPage($totaldata, '6');
												echo $this->pocore()->call->popaging->navPage($getpage, $totalpage, BASE_URL, 'category/all', 'page', '1', $this->e($front_paging_prev), $this->e($front_paging_next));
											?>
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