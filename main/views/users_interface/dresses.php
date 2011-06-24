<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view('users_interface/head');?>
<body>
	<div class="cycle-blocks">
		<div class="c-block dresses">С.Самойлик Поездка в Крым.</div>
	</div>
	<div id="page-wrap">
		<?=$this->load->view('users_interface/menu');?>
		<?php if($userinfo['status']):?>
			<div class="admin-link"><?=anchor('admin/dress-add','Добавить платье');?></div>
		<?php endif;?>
	<?php if(count($units)):?>	
		<div id="news-index">
			<ul id="news-list">
			<?php for($i=0;$i<count($units);$i++):?>
				<li class="post rounded-corners" id="dress-<?=$i;?>">
				<?php $content = '<div class="news-bg rounded-corners"><img src="'.$baseurl.'sunit/viewimage/'.$units[$i]['id'].'" title="'.$units[$i]['title'].'" alt="'.$units[$i]['title'].'"/></div><h4 class="font-replace">'.$units[$i]['title'].'</h4><h5 class="font-replace">'.$units[$i]['note'].'</h5><h5 class="font-replace">Модель #'.$units[$i]['model'].'</h5>';?>
					<?=anchor('dress-info/'.$units[$i]['id'],$content,array('title'=>$units[$i]['title']));?>
				</li>
			<?php endfor;?>
			</ul>
		</div>		
	<?php endif;?>
		<div class="clear"></div>
		<div class="navigation">
			<div class="next-posts">
			<?php if($pages):?>
				<?=$pages;?>
			<?php endif;?>
			</div>
			<div class="prev-posts"></div>
		</div>
		<?=$this->load->view('users_interface/twitter');?>
		<?=$this->load->view('users_interface/footer');?>
	</div>
	<?=$this->load->view('users_interface/javascript');?>
</body>
</html>