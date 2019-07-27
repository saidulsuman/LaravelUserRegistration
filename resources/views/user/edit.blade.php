
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Queer Signup form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <!--//webfonts-->

</head>
<body>

<h1>Update Form</h1>

<div class="w3_frm">

    <!---728x90--->
    <form action="{{route('Update',[$user->id])}}" method="POST">
        {{csrf_field()}}
        <h3>Update Here</h3>
        <div class="field-w3-agile-grid rightf">
            <input type="email" name="email" placeholder="Email" value="{{$user->email}}"  />
        </div>

        <div class="field-w3-agile-grid leftf">
            <input type="text" name="userName" placeholder="UserName" value="{{$user->userName}}" />
        </div>
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="firstName" placeholder="FirstName" value="{{$user->firstName}}" />
        </div>
        <!---728x90--->
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="lastName" placeholder="LastName" value="{{$user->lastName}}" />
        </div>

        <div class="field-w3-agile-grid leftf">
            <label for="gender">gender</label>
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female

        </div>

        <div class="field-w3-agile-grid leftf">
            <input type="text" name="phoneNumber" placeholder="PhoneNumber"value="{{$user->phoneNumber}}" />
        </div>
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="location" placeholder="Location" value="{{$user->location}}"/>
        </div>

        <input type="submit" value="Updated">
    </form>


</div>

</body>
</html>
