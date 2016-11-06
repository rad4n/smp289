		<!-- Insert header script here -->
		<header id="header">
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"></div>
				<div class="nav-wrap container">
					<ul id="menu-topbar-menu" class="nav container-inner group">
						<li><a href="<?=BASE_URL;?>/pages/tentang-kami"><?=$this->e($front_about);?></a></li>
						<li><a href="<?=BASE_URL;?>/contact"><?=$this->e($front_contact);?></a></li>
						<li><a href="javascript:void(0)"><?=$this->e($front_select_lang);?></a>
							<ul class="sub-menu">
							<?php
								$languages = $this->language()->getLanguage('ASC');
								foreach($languages as $language){
									echo "<li><a href='?lang=".$language['code']."'>".$language['title']."</a>";
								}
							?>
							</ul>
						</li>
					</ul>
				</div>
				<div class="container">
					<div class="container-inner">
						<div class="toggle-search"><i class="fa fa-search"></i></div>
						<div class="search-expand">
							<div class="search-expand-inner">
								<form action="<?=BASE_URL;?>/search" method="post" class="searchform themeform">
									<div>
										<input type="text" class="search" name="search" onblur="if(this.value=='')this.value='<?=$this->e($front_search);?>...';" onfocus="if(this.value=='<?=$this->e($front_search);?>...')this.value='';" value="<?=$this->e($front_search);?>..." />
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="container group">
				<div class="container-inner">
					<div class="group pad">
						<h1 class="site-title">
							<a class="custom-logo-link" href="<?=BASE_URL;?>" rel="home"><img src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="<?=$this->pocore()->call->posetting[0]['value'];?>"></a>
						</h1>
						<p class="site-description"><?=$this->pocore()->call->posetting[0]['value'];?></p>
					</div>
					<nav class="nav-container group" id="nav-header">
						<div class="nav-toggle"><i class="fa fa-bars"></i></div>
						<div class="nav-text"></div>
						<div class="nav-wrap container">
							<?php
								echo $this->menu()->getFrontMenu(WEB_LANG, 'id="menu-header-menu" class="nav container-inner group"', 'class="sub-menu"', '', '', '');
							?>
						</div>
					</nav>
				</div>
			</div>
		</header>