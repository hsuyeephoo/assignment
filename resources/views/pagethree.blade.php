@extends('app')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Three</title>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center text-primary">Welcome page three</h3>
                    <p class="p-4 text-warning text-center">Register new user account.</p>

                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" name="confirm-password" id="confirm-password">
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <div class="col-sm-6 ">

        </div>

    </div>

</div>





</body>
</html>

