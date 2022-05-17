
<!doctype html>
<html>
<head>
    <title>List User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1>List User</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th style="text-align: center" >users.mail_address</th>
        <th style="text-align: center">users.name</th>
        <th style="text-align: center">users.address</th>
        <th style="text-align: center">users.phone</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $row)
        <tr>
            <td style="text-align: left">{{$key + 1}}</td>
            <td style="text-align: left">{{$row->mail_address}}</td>
            <td style="text-align: left">{{$row->name}}</td>
            <td style="text-align: left">{{$row->address}}</td>
            <td style="text-align: left">{{$row->phone}}</td><td></td>

        </tr>
    @endforeach
    </tbody>
</table>
{{ $users->links() }}


</body>
</html>
