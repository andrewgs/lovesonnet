<div id="product-browser" class="rounded-corners teaser">
	<a id="prev">
		<img src="<?=$baseurl;?>images/btn-prev.png" border="0" alt="&lt;" />
	</a>
	<a id="next">
		<img src="<?=$baseurl;?>images/btn-next.png" border="0" alt="&gt;" />
	</a>
	<div id="prod-slider">
	<?php for($i=0;$i<count($units);$i++):?>
		<div class="product">
			<?=anchor($link.'-info/'.$units[$i]['id'],'<img src="'.$baseurl.'sunit/viewimage/'.$units[$i]['id'].'" title='.$units[$i]['title'].'" alt="'.$units[$i]['title'].'"/>');?>
		</div>
	<?php endfor;?>
	</div>
</div>