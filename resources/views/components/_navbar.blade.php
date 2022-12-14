<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <h1><a id="navbar-link-title" class="navbar-brand" href="{{url('/')}}">Cleaning Agency</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                @role('client')
               
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('home') }}">
                    <i class="fa-solid fa-house"></i>
                    Home
                   </a>
                   
                   
                </li>
                <li class="nav-item">
                    
                   <a id="navbar-links" class="nav-link" href="{{ route('user-profile') }}">
                    <i class="fa-solid fa-user"></i>
                    User
                </a>  
                   
                </li>
                
                @endrole

                @role('detective')
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('all-cases') }}">All Cases</a>  
                        
                    </li>
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('all-users') }}">All Users</a>  
                        
                    </li>

                @endrole

                @hasanyrole('detective|client')
                    {{-- <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('user-index') }}"><i class="fa-solid fa-dumbbell"></i></a>  
                        
                    </li> --}}
                    {{-- <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="{{ route('admin-index') }}">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span>
                                
                            </span>
                        </a>
                        
                    </li> --}}
                    <li class="nav-item">
                        
                        <a id="navbar-links" class="nav-link" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>
                        
                        
                    </li>
                @endrole
            </ul>
        </div>
    </div>
</nav>


<style>


#navbar-box{
    height: 80px;
    padding-left: 20px; 
    padding-right: 20px; 
    background-color: blue;
}
.navbar-brand{
    font-size: 30px;
}

a.nav-link:link{
    
    font-weight: bold;
}
#navbar-link-title{
    color: white;
    
    font-weight: bold;
}
a.nav-link{
    color: white;
}
a.nav-link:hover{
    color: yellow;
    /* color: white; */
    
    font-weight: bold;
}

.nav-link{
    margin-left: 25px;
}

</style>