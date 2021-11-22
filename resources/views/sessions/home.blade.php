<!DOCTYP html>
<html>
<head>

</head>
<body>

<div>


</div>

<div class="mt-8 md:mt-0 flex items-center">
    @auth
        <span class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name }}</span>
        <form method="post" action="/logout" class="text-xs font-semibold text-blue-500 ml-6" >
            @csrf
            <button type="submit">log out</button>
        </form>
    @else
        <a href="/register" class="text-xs font-bold uppercase">Register</a>
        <a href="/login" class="text-xs font-bold uppercase">Login</a>
    @endauth

</div>
<div class="center" style="padding-top: 12%;background: #f66d9b;font-max-size: xxx-large;margin-left: 46% ">
    <p class="center font-bold "> Welcome to the task add app </p>>
</div>
</body>
</html>
