@extends('app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page One</title>
</head>
<body>
<div class="container p-3">

    <div class="row">
        <div class="col-sm-4">
            <h3 class="mt-auto text-center text-info">Lists of intern students</h3>

            <table class="table table-bordered">
                <tr class="text-center table-info">
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Address</th>
                    <th>Phone No</th>
                </tr>
                <tr>
                    <td>Mi Hsu Yee Phoo</td>
                    <td>5cs-1</td>
                    <td>Yangon</td>
                    <td>9769727951</td>
                </tr>
                <tr>
                    <td>Ma May Thant Sin Thu</td>
                    <td>5cs-21</td>
                    <td>Yangon</td>
                    <td>9693467461</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-8">
        </div>
    </div>
    <a href="{{route('pagetwo')}}"><p class="text-info">Go To second page</p></a>


</div>
<div>

</div>
</body>
</html>
