<html>
	<head>
		<title> chatBot 2.0</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src='http://code.jquery.com/jquery-1.10.2.min.js' type="text/javascript" ></script>
	</head>
	<body>

		<div class="chatbox">
			<!--<div class="tete">
				<div class="close">x</div>
				<div class="reduire">-</div>
			</div>-->
		
			<div id="chatlogs" class="chatlogs">
				
				<div class="chat friend">
					<div class="user-photo"><img src="img/user1.png"/></div>
					<p class="chat-message"> Bonjour à KidsHouse !! en quoi je peux vous aidez? </p>
				</div>
				
				<!--<div class="chat self">
					<div class="user-photo"><img src="img/user2.png"/></div>
					<p class="chat-message"> Bonjour ....</p>
				</div> -->
		
				
		</div>
		<div class="chat-form">
			<textarea id="message"></textarea>
			<input type="button" name="submit" id="submit" value="Envoyer"/>

		</div>
	</div>
	
	<script>
		
		$('#submit').click(function() {
			var msg = document.getElementById("message").value;
			
			maDiv = document.createElement("div"); 
			maDiv.className='chat self';
			maDiv.id = 'chat self' 
			document.getElementById("chatlogs").appendChild(maDiv);

			imageDiv = document.createElement("div"); 
			imageDiv.className='user-photo';
			imageDiv.id = 'userphoto';			
			maDiv.appendChild(imageDiv);

			var image = document.createElement("img"); 
			image.src = 'img/user2.png';
			imageDiv.appendChild(image);

			pDiv = document.createElement("p"); 
			pDiv.className='chat-message';			
			pDiv.innerHTML = msg; 
			maDiv.appendChild(pDiv);

			document.getElementById("message").value="";
			
			
			// Réponse 
			 setTimeout(function()
		{
			
			maDiv = document.createElement("div"); 
			maDiv.className='chat friend';
			maDiv.id = 'chat friend' 
			document.getElementById("chatlogs").appendChild(maDiv);

			imageDiv = document.createElement("div"); 
			imageDiv.className='user-photo';
			imageDiv.id = 'userphoto';			
			maDiv.appendChild(imageDiv);

			var image = document.createElement("img"); 
			image.src = 'img/user1.png';
			imageDiv.appendChild(image);

			pDiv = document.createElement("p"); 
			pDiv.className='chat-message';	
			pDiv.innerHTML = "Tapez un msg valide SVP!!";
			maDiv.appendChild(pDiv);

		 },1000);	
			
		});
		
		
	</script>
	</body>
</html>