@extends('app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Two</title>


</head>
<body>

 <div class="container">
     <div class="row">
         <div class="col-sm-4 offset-4">
             <div class="card shadow">
                 <div class="card-body">
                     <h3 class="text-center text-primary">
                         Sing In User Account
                     </h3>
                     <form>
                         <div class="form-group">
                             <label for="email">Email</label>
                             <input type="email" name="email" id="email">
                         </div>
                         <div class="form-group">
                             <label for="password">Password</label>
                             <input type="password" name="password" id="password">
                         </div>
                         <div class="form-group">
                             <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                         </div>
                     </form>
                     <div class="mt-3">
                         Do not have an account?<a href="{{route('pagethree')}}">Sing Up</a>
                     </div>
                 </div>

             </div>


         </div>
         <div class="col-sm-8 offset-8">

         </div>

     </div>

 </div>

</body>
</html>
