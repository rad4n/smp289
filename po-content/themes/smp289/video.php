<?=$this->layout('index');?>

<section id="page-title" class="page-title-mini" style="margin-top:-80px;">
	<div class="container clearfix">
		<ol class="breadcrumb">
			<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
			<li><a href="<?=BASE_URL.'/video';?>">Video</a></li>
		</ol>
	</div>
</section>

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div id="portfolio" class="portfolio-masonry clearfix">
			<?php
				$videos = $this->pocore()->call->podb->from('video')
					->orderBy('id_video')
					->limit('8')
					->fetchAll();
				foreach($videos as $video){
			?>
				<article class="portfolio-item">
					<div class="portfolio-image">
						<iframe src="<?=$video['url'];?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="portfolio-desc">
						<h5><?=$video['title'];?></h5>
					</div>
				</article>
			<?php } ?>
			</div>
			<div class="col-md-12 text-center" style="margin-top:30px;">
				<ul class="pagination nobottommargin">
					<?php
						$totaldata = $this->pocore()->call->podb->from('video')->count();
						$totalpage = $this->pocore()->call->popaging->totalPage($totaldata, '8');
						echo $this->pocore()->call->popaging->navPage($this->e($page), $totalpage, BASE_URL, 'video', 'page', '1', $this->e($front_paging_prev), $this->e($front_paging_next));
					?>
				</ul>
			</div>
			<script type="text/javascript">
				jQuery(window).load(function(){
					var $container = $('#portfolio');
					$container.isotope({ transitionDuration: '0.65s' });
					$(window).resize(function() {
						$container.isotope('layout');
					});
				});
			</script>
		</div>
	</div>
</section>