@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Alz-Detect') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
    
                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
    
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    </div>
    
            <div class="row align-items-center justify-content-center text-center">
    
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                
    
                <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">Alz-Detect</h1>
               <!--  <p class="mb-5" data-aos="fade-up" data-aos-delay="100">A Logistics Company</p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="https://free-template.co" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p> -->
    
              </div>
            </div>
          </div>
        </div>  
    
        <div class="site-section" id="section-about">
          <div class="container">
            <div class="row mb-5">
              
              <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/dim.jpg') }}" alt="Image" class="img-fluid rounded">
              </div>
              <div class="col-md-6 order-md-1" data-aos="fade-up">
                <div class="text-left pb-1 border-primary mb-4">
                  <h2 class="text-primary">THE FUTURE OF HEALTH CARE </h2>
                </div>
                <p>Alzheimer’s disease is an irreversible, progressive disorder that slowly destroys memory and thinking skills. It eventually impedes the person from carrying out the simplest everyday tasks. The onset of symptoms mainly appears when the person is in their mid-60’s. If not addressed it rolls on to become the most common cause of dementia among older adults. </p>
                <p class="mb-5">Now is the time to exploit modern technology to help battle Alzheimers.</p>
                <p data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary py-3 px-5 text-white" href="{{ route('register') }}" >JOIN US </a></p>
                
               <!--  <ul class="ul-check list-unstyled success">
                  <li>Error minus sint nobis dolor</li>
                  <li>Voluptatum porro expedita labore esse</li>
                  <li>Voluptas unde sit pariatur earum</li>
                </ul>
                 -->
              </div>
              
            </div>
          </div>
        </div>


    
    
      
        
        
    
    
    
       
    
    
    
    
    
      
    
        
    
     
    
    
        
 
    
 
    
      
        
        
                </div>
            </div>
        </div>
    </div>
    

@endsection
