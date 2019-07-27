
<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <style>
        table {

            font-family: arial, sans-serif;
            border-collapse: collapse;

            width: 100%;


        }

        td, th {
            border: 1px solid green;
            background-color:greenyellow;

            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color:blue;
        }
    </style>
</head>
<body>

<h2 align="center">Registerd User</h2>

<table>
    <tr>
        <th>email</th>
        <th>userName</th>
        <th>firstName</th>
        <th>lastName</th>
        <th>gender</th>
        <th>phoneNumber</th>
        <th>location</th>
        <th>Action</th>

    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->email}}</td>
            <td>{{$user->userName}}</td>
            <td>{{$user->firstName}}</td>
            <td>{{$user->lastName}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->phoneNumber}}</td>
            <td>{{$user->location}}</td>
            <td><a href="{{route('Edit',[$user->id])}}">Edit</a>||<a href="{{route('Delete',[$user->id])}}">Delete</a></td>
        </tr>
    @endforeach
    <button type="button" name="button" value="Go to Register"><a href="{{route('user')}}">Go to Register</a></button>
    <button type="button" name="button" value="Go to Register"><a href="{{url('/')}}">Go to Home</a></button>
</table>

</body>
</html>
