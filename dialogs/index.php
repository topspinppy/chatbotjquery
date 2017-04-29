<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style media="screen">
      .container{
        font-size: 18px;
        width : 50px;
        height : 50px;
        margin-top: 50px;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>



<!-- Modal -->

<div class="container">
  คุณต้องการสอนอะไรเพิ่มเติมไหม?
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">click</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
          <button type="button" class="btn btn-primary">คกลง</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>
  </div>

</div>

  </body>
</html>


</script>
