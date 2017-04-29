<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#button').click(function() {
				$('#body').prepend($('#text').val());
				$.ajax({
					url: "./test.php",
					data: {
						text: $('#text').val()
					},
					type: 'POST',
					success: function(xxx) { //ถ้าสำเร็จให้มาที่ Success
						// console.log(xxx);
						$('#text').val('');
			        	$('#body').append(xxx);
			    	}
				});
			});
		});

		//$('#')
	</script>
</head>
<body id="body">
	<input type="text" id="text"/>
	<input type="button" id="button" name="" value="ตกลง">
</body>
</html>
