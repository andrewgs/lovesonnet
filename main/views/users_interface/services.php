<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view('users_interface/head');?>
<body>
	<div class="cycle-blocks">
		<div class="c-block services">Свадебная церемония</div>
	</div>
	<div id="page-wrap">
		<?=$this->load->view('users_interface/menu');?>
		<?=$this->load->view('users_interface/sidepanel');?>		
		<div class="rounded-corners white about curvyRedraw" id="mainpanel">
			<div id="big-idea" class="sub-section">
				<h2>Для Вас мы приготовили...</h2>
				<p>Лучшие цены на качественные платья (от 5 000 до 30 000 рублей).</p>
				<p>Возможность не только покупки, но и проката понравившегося платья.</p>
				<p>Как популярные, так и уникальные, единственные в Ростове-на-Дону, модели свадебных платьев.</p> 
				<p>Индивидуальное обслуживание клиентов по предварительной записи (в удобное для Вас время приходите вместе с мамой, сестрой, подругой, примеряйте понравившиеся модели и приобретайте то единственное платье Вашей мечты).</p>
				<p>Подгонку размера по фигуре и фасона платья по желанию клиента (если традиционный шлейф кажется Вам лишним, по Ващему велению наш мастер обрежет его; если Вы настолько миниатюрна, что сложно подобрать наряд, мастер уменьшит размер корсета специально для вашей талии).</p>
				<p>Доброжелательный персонал, готовый помочь в нелегком и одновременно приятном выборе свадебного наряда.</p>
			</div>
		</div>
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
</body>
</html>