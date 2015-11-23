<div class="shoe">	
	 <?php //if (!empty($_SESSION['login'])) { ?> 
		<div id="container">
			<form id="chatpost">
				<label for="chatmessage">Chat Message:</label><br/>
				<textarea name="chatmessage" id="chatmessage" placeholder="Login To Chat"></textarea><br/>
				<input type="submit" name="submit" id="send-home" value="Send">
			</form>	
  	</div>
	<?php	//} ?>
	<div id="chatwindow">
	  <div id="messages"></div>
	</div>
</div>