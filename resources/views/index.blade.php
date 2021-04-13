<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Vue Laravel</title>
</head>
<body>
    <div id="app">
       <base-component v-for='(laptop,index) in catalogue' :key='index' :catalogue='laptop'/>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
