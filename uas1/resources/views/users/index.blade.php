<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    <div class="border border-black">
        <table class="">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            @foreach($users as $use)
            <tr>
                <td>{{$use-> name}}</td>
                <td>{{$use-> email}}</td>
                <td>{{$use-> password}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>