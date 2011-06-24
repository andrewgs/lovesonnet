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
				<h2><?=$unit['title'];?></h2>
				<img src="<?=$baseurl;?>unit/viewimage/<?=$unit['id'];?>" title="<?=$unit['title'];?>" alt="<?=$unit['title'];?>"/>
				<h3>Модель #<?=$unit['model'];?></h3>
				<p><?=$unit['note'];?></p>
			</div>
		<?php if($userinfo['status']):?>
			<div class="admin-link">
				<?=anchor('admin/'.$link.'-edit/'.$this->uri->segment(2),'Редактировать');?>
				<?=anchor('admin/'.$link.'-delete/'.$this->uri->segment(2),'Удалить');?>
			</div>
		<?php endif;?>
		</div>
	
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
	 <script>
	  $(function(){
		$('div#prod-slider').cycle({
	        fx:     'scrollHorz',
	        speed:  '2000',					
	        easing: 'easeInOutExpo',
	        timeout:  0,
	        prev:    '#prev',
	        next:    '#next'
	    });  	
	  });    
  </script>
</body>
</html>