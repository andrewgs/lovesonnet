<?php if($menu):?>
<div <?=$position;?> id="you-are-here">
	Вы здесь!
</div>
<?php endif;?>
<div id="header">
	<h1 id="logo"><a href="http://www.lovesonnet.ru/">Соннет</a></h1>
	<ul id="main-nav" class="rounded-corners">
		<li><?=anchor('','Главная',array('title'=>'На главную','class'=>'home'));?></li>
		<li><?=anchor('dresses','Платья',array('title'=>'Примерьте одно из них','class'=>'dress'));?></li>
		<li><?=anchor('accessories','Аксессуары',array('title'=>'Они украсят ваш праздник','class'=>'access'));?></li>
		<li><?=anchor('services','Услуги',array('title'=>'Чем мы можем вам помочь','class'=>'services'));?></li>
		<li><?=anchor('about','О нас',array('title'=>'Несколько слов о нас','class'=>'about'));?></li>
	<?php if($userinfo['status']):?>
		<li><?=anchor('contact','Контакты',array('title'=>'Остановитесь и поздоровайтесь!','class'=>'contact'));?></li>
		<li><?=anchor('profile','Профиль');?></li>
		<li class="end"><?=anchor('shutdown','Выход');?></li>
	<?php else: ?>
		<li class="end"><?=anchor('contact','Контакты',array('title'=>'Остановитесь и поздоровайтесь!','class'=>'contact'));?></li>
	<?php endif;?>
	</ul>
</div>
<div class="clear"></div>