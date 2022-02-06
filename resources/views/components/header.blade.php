<header>
    <h1>BoolPress</h1>
    <div>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('posts')}}">Posts</a>
        <a href="{{route('create')}}">Create</a>

    </div>

    @auth
        <div>
            <h2>Ciao {{Auth::user()-> name}}</h2>
            <a class="btn btn-secondary" href="{{route('logout')}}">Logout</a>

        </div>
       



    @else
        <div>
            <a class="btn btn-primary" href="{{route('show.login')}}">Login</a>
            <a class="btn btn-primary" href="{{route('show.register')}}">Register</a>
        </div>
    @endauth
   
    
   
   
</header>