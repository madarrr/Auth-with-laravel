<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homeland</title>
</head>
<body>
    <div class="container">
    <h1>Welcome on user views</h1>
    <a href="#" onclick="document.getElementById('form-logout').submit()" >
          <form action="{{ route('logout') }}" id="form-logout" method="POST">@csrf </form>
           <i class="fa fa-power-off" aria-hidden="true"></i>
          </a>
    </div>
   
    
</body>
</html>