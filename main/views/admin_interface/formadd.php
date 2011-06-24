<?= form_open_multipart($this->uri->uri_string(),array('id'=>'formauth','class'=>'formular')); ?>
	<?=validation_errors();?>
	<div class="form-edit-text">
		<b>Рисунок:</b><br/>
		<input class="text-form-input" type="file" name="userfile">
		<div class="clear"></div>
		<div class="form-reqs">Поддерживаемые форматы: JPG, GIF, PNG</div>
		<div class="clear"></div>
		<b>Название:</b><br/>
		<input class="text-form-input" type="text" name="title" maxlength="50" value="<?=set_value('title');?>">
		<div class="clear"></div>
		<b>Номер модели:</b><br/>
		<input class="small-text-form-input" type="text" name="model" maxlength="50" value="<?=set_value('model');?>">
		<div class="clear"></div>
		<b>Описание:</b><br/>
		<textarea class="text-form-textarea" name="note" cols="50" rows="8"><?=set_value('note');?></textarea>
		<div class="clear"></div>
		<input type="submit" class="lnk-submit" name="submit" value="Добавить"/>
	</div>
	<div class="clear"></div>
<?= form_close(); ?>