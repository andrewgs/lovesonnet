<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view('users_interface/head');?>
<body>
	<div class="cycle-blocks">
		<div class="c-block contact">Свадебная церемония</div>
	</div>
	<div id="page-wrap">
		<?=$this->load->view('users_interface/menu');?>
		<div class="contact" id="mainpanel">
			<h2 class="font-replace">Мы всегда открыты для общения, поэтому не стесняйтесь написать нам по адресу info@lovesonnet.ru или позвонить по номеру (908) 506 87 46.</h2>
			<h3 class="font-replace">
				Вы можете также связаться с нами <br/>
				или написать нам сообщение в <a target="_blank" title="Следите за обновлениями на Twitter" href="http://www.twitter.com/lovesonnet">Twitter</a> или 
				<a target="_blank" title="Вступайте в нашу группу" href="http://vkontakte.ru/club21350704">Вконтакте</a>.
			</h3>
		</div>
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
</body>
</html>