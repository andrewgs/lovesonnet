<div class="about" id="sidepanel">
	<?php if($slides):?>
		<?=$this->load->view('users_interface/slides');?>
	<?php endif;?>
	<?= form_open('add-email',array('id'=>'subForm','class'=>'rounded-corners teaser')); ?>
		<h4 class="font-replace">Быть в курсе</h4>
		<h5 class="font-replace">Получать новые каталоги...</h5>
		<div>
			<label for="name">Имя:</label>
			<input name="cm-name" id="name" placeholder="Имя" type="text"><br>
			<label for="email">Почта:</label>
			<input name="cm-email" id="phikyt-phikyt" placeholder="Почта" type="text"><br>
			<input value="ОК" id="submit" type="submit" name="addemail">
		</div>
	<?= form_close(); ?>
</div>