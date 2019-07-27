
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
<button type="button" name="button" value="Go to Register"><a href="{{url('/')}}">Go to Home</a></button>
<h1>Register Form</h1>

<div class="w3_frm">

    <!---728x90--->
    <form action="{{route('user')}}" method="POST">
        {{csrf_field()}}
        <h3>Signup Form</h3>
        <div class="field-w3-agile-grid rightf ">
            <input type="email" name="email" placeholder="Email"  />
            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
            {{--{{$error->has('email')?'has-error':"}}--}}
            {{--@if($erros->has('email'))--}}
                {{--<span class="help-block">--}}
                    {{--<strong>{{$error->first('email')}}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
        </div>

        <div class="field-w3-agile-grid leftf">
            <input type="text" name="userName" placeholder="UserName"  />
            @if ($errors->has('userName'))
                @foreach ($errors->get('userName') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="firstName" placeholder="FirstName"  />
            @if ($errors->has('firstName'))
                @foreach ($errors->get('firstName') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <!---728x90--->
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="lastName" placeholder="LastName"  />
            @if ($errors->has('lastName'))
                @foreach ($errors->get('lastName') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>

        <div class="field-w3-agile-grid leftf">
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="gender" value="male"/>male
            <input type="radio" name="gender" id="gender" value="female"/>female
            @if ($errors->has('gender'))
                @foreach ($errors->get('gender') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>

        <div class="field-w3-agile-grid leftf">
            <input type="text" name="phoneNumber" placeholder="PhoneNumber" />
            @if ($errors->has('phoneNumber'))
                @foreach ($errors->get('phoneNumber') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div class="field-w3-agile-grid leftf">
            <input type="text" name="location" placeholder="Location" />
            @if ($errors->has('location'))
                @foreach ($errors->get('location') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div class="field-w3-agile-grid rightf">
            <input type="password" name="password" placeholder="PassWord"/>
            @if ($errors->has('password'))
                @foreach ($errors->get('password') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div class="field-w3-agile-grid rightf">
            <input type="password" name="password_confirm" placeholder="password_confirm"  />
            @if ($errors->has('password_confirm'))
                @foreach ($errors->get('password_confirm') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        {{--<div class="field-w3-agile-grid rem">--}}
            {{--<input type="checkbox" value="">--}}
            {{--<label for="brand"><span></span>I Accept to the Terms and Conditions</label>--}}
        {{--</div>--}}

        <input type="submit" value="SIGNUP">
    </form>


</div>

</body>
</html>
