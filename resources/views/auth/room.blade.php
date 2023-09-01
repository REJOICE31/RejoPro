<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>room</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>ROOM</b></a>
    </div>
    <div class="card-body">
      <form action="{{route('room')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="level" id="level" placeholder="floor level">
         
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
         
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="type" id="type" placeholder=" Room Type">
        
        </div>
        <div class="input-group mb-3">
          <input type="code" class="form-control" name="code" id="code" placeholder=" Room code">
        
        </div>
        </div>        
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">submit</button>
          </div>
        </div>
      </form>
      

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
