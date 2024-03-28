<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$result1->u_id}}
    <br><br>
    {{$result1->u_email}}
    <br><br>
    @forelse ($result2 as $val)
        {{$val}}<br>
    @empty
        값 없음
    @endforelse
</body>
</html>