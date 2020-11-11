

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <form action="{{ route('login.logon')}}" method="post">
        @csrf
        <div class="w-screen h-screen flex items-start justify-center text-center">
            
            <div class="w-1/3">
                <span class="fa fa-twitter fa-2x m-4 text-blue-500"></span>
    
                <label class=" block text-center font-bold mb-5 text-lg">Log in Twitter</label>
                @isset($error)
                    <small style="color:red" v-for="(error, index) in errors" :key="index">
                        {{$error}}
                    </small>
                @endisset
                
                <div class="text-left hover:text-blue-500 bg-gray-100 w-full p-1">
                    <small class="block">Phone, email, or username</small>
                    <input type="email" name="username" class="p-1 border-b border-gray-500 outline-none bg-gray-100 w-full focus:border-blue-500">
                </div>
                
                <div class="text-left hover:text-blue-500 bg-gray-100 w-full mt-5 p-1">
                    <small class="block">Password</small>
                    <input type="password" name="password" class="p-1 border-b border-gray-500 outline-none bg-gray-100 w-full focus:border-blue-500">
                </div>
    
                <input type="submit" class="w-full rounded-full text-white mt-3 p-2 bg-blue-500 font-bold outline-none" value="Log in">
    
            </div>
           
        </div>
    </form>
</body>
</html>