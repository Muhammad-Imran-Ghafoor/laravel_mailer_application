<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{url('/product')}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name</label>
          <input type="name" class="form-control" name="p_name" id="name" aria-describedby="emailHelp" placeholder="Enter product name">
  
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Your Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>