<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Hello , {{$name}} </h1>
<form action="about" method= "POST">
    @csrf
    <input type="text" name="name" id="name"><br><br>
    <select name = "department" id = "department">
        @foreach($departments as $key => $department)
            <option value="{{$key}}">{{$department}}</option>
        @endforeach
        <option value="02">Financial</option>--}}
        <option value="03">Sales</option>
        {{--        <option value="01">Tichnical</option>--}}
        {{--        @endforeach--}}
        {{--        <option value="02">Financial</option>--}}
        {{--        <option value="03">Sales</option>--}}
    </select><br><br>
    <input type="submit" value="send">
</form>
</body>
</html>
