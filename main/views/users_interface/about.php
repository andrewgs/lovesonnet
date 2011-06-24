<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view('users_interface/head');?>
<body>
	<div class="cycle-blocks">
		<div class="c-block about">Свадебная церемония</div>
	</div>
	<div id="page-wrap">
		<?=$this->load->view('users_interface/menu');?>
		<?=$this->load->view('users_interface/sidepanel');?>
		<div class="rounded-corners white about curvyRedraw" id="mainpanel">
			<div id="big-idea" class="sub-section">
				<h2>Компания Sonnet предлагает...</h2>
				<p>Мы предлагаем российским невестам платья различных свадебных дизайнеров, в том числе и линию марки Sonnet.</p> 
				<p>Необходимость в открытии именно такого салона вызвана тем, что в нашем городе трудно найти приемлемое по цене платье достойного качества.</p> 
				<p>Сервис проката платьев создан для того, чтобы Вы, увидев платье своей мечты или желаемого бренда, смогли его получить и быть  королевой бала, не влезая в жуткие долги и кредиты, расплачиваться  с которыми особенно неудобно в начале семейной жизни.</p>
				<p>Возможно, нет предела совершенству, но любите себя такой, какая Вы есть. Ведь Вы прекрасны!</p>
			</div>
		</div>
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
</body>
</html>