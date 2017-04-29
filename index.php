<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<style>

	</style>
</head>
<body>
	<div class="container">
		<div class="message">
			<div class="messageone">
				<div class="question">

				</div>
				<div class="answer">

				</div>
			</div>
		</div>
		<div class="chatinput">

		</div>
	</div>
	<div id="chatbot-message">
	</div>
	<input type="text" id="chatbot-input" name="chatbot-input"/>
	<input type="button" id="chatbot-submit" name="" value="ตกลง">
</body>
<script>
	$(document).ready(function() {
		$('#chatbot-submit').click(function() {
			$('#chatbot-message').append('<div class ="question">'+$('#chatbot-input').val()+'</div>');
			$.ajax({
				url: "./test1.php",
				data: {
					text: $('#chatbot-input').val()
				},
				type: 'POST',
				success: function(xxx) { //ถ้าสำเร็จให้มาที่ Success
					// console.log(xxx);
					$('#chatbot-input').val('');
							$('#chatbot-message').append(xxx);
					}
			});
		});

		$('#chatbot-input').keyup(function(e){
			if(e.keyCode == 13)
			{
					$('#chatbot-submit').click();
			}
		});
	})
</script>

</html>
