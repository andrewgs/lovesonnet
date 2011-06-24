<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view('users_interface/head');?>
<body>
	<div class="cycle-blocks">
		<div class="c-block main">Свадебная церемония</div>
	</div>
	<div id="page-wrap">
		<?=$this->load->view('users_interface/menu');?>
		<div style="position: relative;" id="banner">
			<div class="banner-slide">
				<h2 class="font-replace">Приветствуем Вас в салоне свадебных платьев и аксессуаров Соннет.</h2>
			</div>
		</div>
		<?=$this->load->view('users_interface/sidepanel');?>
		<div class="rounded-corners white about curvyRedraw" id="mainpanel">
			<div id="big-idea" class="sub-section">
				<h2>Самый важный день в вашей жизни...</h2>
				<h3>Мы знаем, как трудно сделать этот день идеальным и незабываемым. Мы помогаем нашим клиентам создать прекрасный образ невесты, о котором мечтает каждая девочка еще в детстве. </h3>
				<p>Как показывает опыт,  50% счастливой улыбки невесты в этот день зависит от ее прекрасного отражения в зеркале и уверенности в своей неотразимости.</p> 
				<p>Почему 50%? Потому что остальные 50 процентов всецело зависят от обстоятельств. В конце концов, мы можем и не догадываться, что двоюродный дядя невесты из Хабаровска после третьего тоста перестает «уважать» троюродную тетю жениха из Мариуполя, а  наши дедушки в процессе дискуссии о значении личности Сталина для истории  забудут,  для чего они собрались за праздничным столом. Мы, конечно, могли бы обещать 100 процентов успеха свадьбы, но тогда наши цены поднялись бы вдвое и не радовали Вас.</p>
				<p>Желаем от всей души создать счастливый семейный союз!</p>
			</div>
		</div>
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
</body>
</html>