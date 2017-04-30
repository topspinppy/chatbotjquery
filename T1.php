
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Chat (by Pavel Komiagin) - Bootsnipp.com</title>
    <link rel="stylesheet" type="text/css" href="T1.css">
    <link rel="stylesheet" type="text/css" href="T2.1.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style media="screen">
      	.container{
      		font-size: 18px;
      		width : 50px;
      		height : 50px;
      		margin-top: 50px;
      	}
      </style>
</head>
<body>
      <div class="chat_window">
        <div class="top_menu">
          <div class="buttons">
              <div class="button close">

              </div>
              <div class="button minimize">

              </div>
              <div class="button maximize">

              </div>
           </div>
           <div class="title">
             <img src="img/Logo_00223.gif" width="96" height="54">
           </div>
         </div>
      <ul class="messages">
        <section id="textshow">

        </section>
      </ul>
         <div class="bottom_wrapper clearfix">
           <div class="message_input_wrapper">
             <input type="text" class="message_input" id="chatbot-input" placeholder="Type your message here..." />
           </div>

        <input type="button" id="chatbot-submit" class="message_button"  value="Send">
        </div>
      </div>
          <div class="message_template">
            <li class="message">
              <div class="avatar">
              </div>
              <div class="text_wrapper">
                <div class="text">
                </div>
              </div>
            </li>
          </div>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                  <h4 class="modal-title"><center><b><i>คุณต้องการสอนอะไรให้ฉัน?</i></b></center></h4>
                </div>

                <div class="modal-body">

                  <!-- <div class="container"> -->

                      <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">คำถาม : </label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="กรุณาใส่คำถาม">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">คำตอบ : </label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="กรุณาใส่คำตอบ">
                      </div>
                    </div>
                  <!-- </div> -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">ตกลง</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div>
          </div>
</body>
<script>

  var isAddNew = false;
  var recentQuestion = '';
  //=========================================
  $('#chatbot-submit').click(function () {
    var textshow_Scrollbar = document.getElementById("textshow");
    $('.messages').animate({scrollTop: textshow_Scrollbar.scrollHeight}, 800);
    return false;
  });
  //=========================================
  // var obj = {
  //   addNew: 0
  // };
		$('#chatbot-submit').click(function() {
			//$('#textshow').append('<div class="from-me">'+ $('#chatbot-input').val()+'</div>'+'<div class="clear"></div>');

      $('#textshow').append(
        '<div class="userframe">'+
        '<div class="user">'+
          '<div class="from-me">'+
            $('#chatbot-input').val()+
          '</div>'+
          '<img src="img/0000133Q.gif">'+
        '</div>'+
        '</div>'+
        '<div class="clear"></div>');
        //console.log($('#chatbot-input').val().length);
      if(isAddNew === false) {
        $.ajax({
  				url: "./test1.php",
  				data: {
  					text: $('#chatbot-input').val()
  				},
  				type: 'POST',
  				success: function(result) { //ถ้าสำเร็จให้มาที่ Success
  					// console.log(xxx);
            result = $.parseJSON(result);
            isAddNew = result.addNew == 0 ? false : true;
            recentQuestion = $('#chatbot-input').val();
            // obj.recentQuestion = $('#chatbot-input').val();
            // console.log(result);
  					$('#chatbot-input').val('');
  							//$('#textshow').append('<div class="from-them">'+result.answer+'</div>');
                $('#textshow').append(
                  '<div class="botframe">'+
                  '<div class="bot">'+
                    '<div class="from-them">'+
                      result.answer+
                    '</div>'+
                    '<img src="img/00000001113.gif">'+
                  '</div>'+
                  '</div>');
  					}
  			});
      } else {
        $.ajax({
  				url: "./addNewAnswer.php",
  				data: {
            question: recentQuestion,
            answer: $('#chatbot-input').val()
          },
  				type: 'POST',
  				success: function(result) {
            $('#chatbot-input').val('');
            isAddNew = false;
            recentQuestion = '';
            //$('#textshow').append('<div class="from-them">สอนเสร็จแล้วนะ</div>');
            $('#textshow').append(
              '<div class="botframe">'+
              '<div class="bot">'+
                '<div class="from-them">ฉันเข้าใจแล้วล่ะ</div>'+
                '<img src="img/00000001113.gif">'+
              '</div>'+
              '</div>');
          }
  			});
      }

		});

		$('#chatbot-input').keyup(function(e){
			if(e.keyCode == 13)
			{
					$('#chatbot-submit').click();
			}
		});
</script>
</html>
