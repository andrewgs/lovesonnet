<div id="twitter-feed" class="rounded-corners">
	<div class="social">
		<a class="twitter-link" href="http://www.twitter.com/lovesonnet.ru/" target="_blank" title="Следите за обновлениями на Twitter">Следите за обновлениями на Twitter</a>
		<a class="vk-link" href="http://vkontakte.ru/club21350704" target="_blank" title="Вступайте в нашу группу">Вступайте в нашу группу</a>
	</div>
	<div class="tweet">
		<a id="launch-twitter" href="http://www.twitter.com/lovesonnet.ru/" target="_blank" title="Следите за обновлениями на Twitter">Следите за обновлениями на Twitter</a>
		<div id="twitter-vjck" class="widget widget_twitter_vjck">
			<div id="widget_twitter_vjck">
	    		<ul>
    				<div id="twitter_time_line" style="width:100%; overflow:hidden;">
		    			<script type="text/javascript">
		    				function twitterCB(twitters) {
								var statusHTML = [];
							  	for (var i=0; i<twitters.length; i++){
							    	var username = twitters[i].user.screen_name;
							    	var status = twitters[i].text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
							      		return '<a href="'+url+'">'+url+'</a>';
							    	}).replace(/\B@([_a-z0-9]+)/ig, function(reply) {
							      		return  reply.charAt(0)+'<a href="http://twitter.com/'+reply.substring(1)+'">'+reply.substring(1)+'</a>';
							    	});
							    	statusHTML.push('<li>'+status+'</li>');
							  	}
							  	document.getElementById('twitter_time_line').innerHTML = statusHTML.join('');
							}
						</script>
					</div>
				</ul>
			</div>
		</div>
	</div>		
</div>