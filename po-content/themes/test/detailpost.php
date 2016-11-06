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
										<?=$this->e($front_post_title);?>
										<span>/</span>
										<a href="<?=$this->e($social_url);?>" rel="category tag"><?=$this->e($page_title);?></a>
									</li>
								</ul>
							</div>
							<div class="pad group">
								<article class="post type-post status-publish format-image has-post-thumbnail hentry category-music post_format-post-format-image">
									<div class="post-inner group">
										<h1 class="post-title entry-title"><?=$this->e($post['title']);?></h1>
										<p class="post-byline">
											By <span class="vcard author"><span class="fn"><a href="<?=BASE_URL;?>/member/profile/<?=$this->post()->getAuthor($post['editor'])['username'];?>" title="Posts by <?=$this->post()->getAuthorName($post['editor']);?>" rel="author"><?=$this->post()->getAuthorName($post['editor']);?></a></span></span>
											&middot; Published <time class="published" datetime="<?=$post['date'];?>"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></time>
										</p>
										<?php if ($this->e($post['picture']) != '') { ?>
										<div class="post-format">
											<div class="image-container">
												<img width="720" height="340" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($post['picture']);?>" data-src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($post['picture']);?>" class="attachment-thumb-large size-thumb-large wp-post-image" alt="Man with guitar." data-srcset="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($post['picture']);?> 720w, <?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($post['picture']);?> 520w" sizes="(max-width: 720px) 100vw, 720px" />
												<?php if ($post['picture_description'] != '') { ?>
												<div class="image-caption"><?=$post['picture_description'];?></div>
												<?php } ?>
											</div>
										</div>
										<?php } ?>
										<div class="clear"></div>
										<div class="entry themeform share">
											<div class="entry-inner">
												<?=htmlspecialchars_decode(html_entity_decode($this->e($post['content'])));?>
												<br><br>
												Tag: <?=$this->post()->getPostTag($post['tag'], ', ');?>
											</div>
										</div>
									</div>
								</article>
								<div class="clear"></div>
								<h4 class="heading"><i class="fa fa-hand-o-right"></i><?=$this->e($front_related_post);?></h4>
								<ul class="related-posts group">
								<?php
									$relateds = $this->post()->getRelated($post['id_post'], $post['tag'], '3', 'DESC', WEB_LANG_ID);
									foreach($relateds as $related){
								?>
									<li class="related post-hover">
										<article class="post type-post status-publish format-video has-post-thumbnail hentry category-music post_format-post-format-video">
											<div class="post-thumbnail">
												<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>" title="<?=$related['title'];?>">
													<img width="520" height="245" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$related['picture'];?>" data-src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$related['picture'];?>" class="attachment-thumb-medium size-thumb-medium wp-post-image" alt="<?=$related['title'];?>" data-srcset="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$related['picture'];?> 520w, <?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$related['picture'];?> 720w" sizes="(max-width: 520px) 100vw, 520px" /> <span class="thumb-icon small"><i class="fa fa-play"></i></span>
												</a>
												<a class="post-comments" href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>#comments"><span><i class="fa fa-comments-o"></i><?=$this->post()->getCountComment($related['id_post']);?></span></a>
											</div>
											<div class="related-inner">
												<h4 class="post-title entry-title">
													<a href="<?=$this->pocore()->call->postring->permalink(rtrim(BASE_URL, '/'), $related);?>" rel="bookmark" title="<?=$related['title'];?>"><?=$related['title'];?></a></h4>
												<div class="post-meta group">
													<p class="post-date">
														<time class="published updated" datetime="<?=$related['date'];?>"><?=$this->pocore()->call->podatetime->tgl_indo($related['date']);?></time>
													</p>
													<p class="post-byline" style="display:none">
														&nbsp;By <span class="vcard author"><span class="fn"><a href="<?=BASE_URL;?>/member/profile/<?=$this->post()->getAuthor($related['editor'])['username'];?>" title="Posts by <?=$this->post()->getAuthorName($post['editor']);?>" rel="author"><?=$this->post()->getAuthorName($post['editor']);?></a></span></span>
														&middot; Published <span class="published"><?=$this->pocore()->call->podatetime->tgl_indo($related['date']);?></span>
													</p>
												</div>
											</div>
										</article>
									</li>
									<?php } ?>
								</ul>
								<?php if ($post['comment'] == 'Y') { ?>
								<section id="comments" class="themeform">
									<?php if ($this->post()->getCountComment($post['id_post']) > 0) { ?>
									<h3 class="heading"><?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></h3>
									<ul class="comment-tabs group">
										<li class="active"><a href="#commentlist-container"><i class="fa fa-comments-o"></i><?=$this->e($front_comment);?><span><?=$this->post()->getCountComment($post['id_post']);?></span></a></li>
									</ul>
									<?php
										$com_parent = $this->post()->getCommentByPost($post['id_post'], '6', 'DESC', $this->e($page));
										$com_template = array(
											'parent_tag_open' => '<li class="comment even thread-even depth-1" id="li-comment-{$comment_id}">',
											'parent_tag_close' => '</li>',
											'child_tag_open' => '<ul class="children">',
											'child_tag_close' => '</ul>',
											'comment_list' => '
												<div id="comment-{$comment_id}" class="comment-body">
													<div class="comment-author vcard">
														<img alt="{$comment_name}" src="{$comment_avatar}" srcset="{$comment_avatar}" class="avatar avatar-48 photo" height="48" width="48" />
														<cite class="fn">{$comment_name}</cite> <span class="says">says:</span>
													</div>
													<div class="comment-meta commentmetadata"><a href="#comment">{$comment_datetime}</a></div>
													<p>{$comment_content}</p>
													<div class="reply"><a rel="nofollow" class="comment-reply-link" id="{$comment_id}" href="#respond" title="'.$this->e($comment_reply).'">Reply</a></div>
												</div>
											'
										);
									?>
									<div id="commentlist-container" class="comment-tab">
										<ol class="commentlist">
											<?=$this->post()->generateComment($com_parent, 'DESC', $com_template);?>
										</ol>
									<div>
									<nav class="pagination group" style="width:100%;">
										<div class="wp-pagenavi">
											<ul class="pagination" style="margin:0 auto;">
												<?=$this->post()->getCommentPaging('6', $post['id_post'], $post['seotitle'], $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
											</ul>
										</div>
									</nav>
									<script type='text/javascript'>  
										jQuery(document).ready(function() {
											jQuery("a.comment-reply-link").click(function() {
												var id = jQuery(this).attr("id");
												jQuery("#id_parent").val(id);
											});
											return true;
										});
									</script>
									<?php } ?>
									<div id="respond" class="comment-respond">
										<h3 id="reply-title" class="comment-reply-title"><?=$this->e($front_leave_comment);?></h3>
										<?=$this->pocore()->call->poflash->display();?>
										<form action="http://demo-hueman.presscustomizr.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
											<input type="hidden" name="id_parent" id="id_parent" value="0" />
											<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
											<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
											<p class="comment-form-comment">
												<label for="comment"><?=$this->e($comment_text);?> <span class="required">*</span></label>
												<textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
											</p>
											<p class="comment-form-author">
												<label for="name"><?=$this->e($comment_name);?> <span class="required">*</span></label>
												<input name="name" id="name" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" type="text" size="30" maxlength="245" aria-required='true' required='required' />
											</p>
											<p class="comment-form-email">
												<label for="email"><?=$this->e($comment_email);?> <span class="required">*</span></label>
												<input name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" type="text" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' />
											</p>
											<p class="comment-form-url">
												<label for="url"><?=$this->e($comment_website);?> <span class="required">*</span></label>
												<input name="url" id="url" value="<?=(isset($_POST['url']) ? $_POST['url'] : '');?>" type="text" size="30" maxlength="200" placeholder="http://" required="required" />
											</p><br>
											<p class="antispam-group antispam-group-q" style="clear: both;">
												<div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div>
											</p>
											<p class="form-submit">
												<input name="submit" type="submit" id="submit" class="submit" value="<?=$this->e($comment_submit);?>" />
											</p>
										</form>
									</div>
								</section>
								<?php } ?>
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