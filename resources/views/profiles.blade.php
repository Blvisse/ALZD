@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active text-right">
            <a class="nav-link" href="/home">HOME<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <span class="navbar-text">
              
            
            
                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                        My Profile
                    </a>
    
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            
            </span>
        </li>
         
        </ul>
        
      </div>
    </nav>
    </div>
    
    <div class="card">
        <div class="card-header">My Profile</div>
        <div class="card-body">
            {{-- @include('partials.errors') --}}
            <form enctype="multipart/form-data" action="{{route('users.update-profile')}}" method="post">
            
            @csrf 

            @method('PUT')
            <div class="form-group">
              <label for="avatar">Image</label>
              <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius: 50%; margin-right: 25%; " >
              <input type="file" name="avatar" class="form-control" placeholder="Avatar", id="avatar" value="{{ $user->avatar }}" >

              

          </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name", id="name" value="{{ $user->name }}" >


            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control"  id="email" value="{{ $user->email }}"  >
                

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="password", id="password" value="{{ $user->password }}">
                

            </div>

            <button type="submit" class="btn btn-success">Update Details</button>
            </form> 

        </div>

    </div>
           
    
      
      
        
        
    
    
    
        
    
    
    
    
      
    
        
    
     
    
    
        
 
    
 
    
      
        
        
                </div>
            </div>
        </div>
    </div>
    

@endsection
