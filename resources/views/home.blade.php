@extends('layouts.app')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarText" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active text-right">
            <a class="nav-link" href="/home">HOME<span class="sr-only">(current)</span></a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT US</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left:50px">
              <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
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
          <div class="container" >
            <div class="row mb-5">
              
              <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/dim.jpg') }}" alt="Image" class="img-fluid rounded">
              </div>
              <div class="col-md-6 order-md-1" data-aos="fade-up">
                <div class="text-left pb-1 border-primary mb-4">
                  <h2 class="text-primary">THE ALZ JOURNEY</h2>
                </div>
                <p>Alzheimer’s disease is an irreversible, progressive disorder that slowly destroys memory and thinking skills. It eventually impedes the person from carrying out the simplest everyday tasks. The onset of symptoms mainly appears when the person is in their mid-60’s. If not addressed it rolls on to become the most common cause of dementia among older adults. </p>
                <p class="mb-5">Now is the time to exploit modern technology to help battle Alzheimers.</p>
                <p data-aos="fade-up" data-aos-delay="200"><a href="http://localhost:8501/" class="btn btn-primary py-3 px-5 text-white">PREDICT </a></p>
                
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
    
      
        
        
    
    
    
        {{-- <div class="site-section border-bottom" id="section-our-team">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade">ABOUT US</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="person">
                
                  <h2>MISSION STATMENT</h2>
                  <!-- <p class="position text-muted">Co-Founder, President</p> -->
                  <p class="mb-4">To promote and develop stewradship and support the advancment of MultiMedia University financially,intellectually and socially to ensure that MMU maintains and fosters its image</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <div class="person">
                  <!-- <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle"> -->
                  <h2>VISION STATEMENT</h2>
                  <!-- <p class="position text-muted">Co-Founder, COO</p> -->
                  <p class="mb-4">To be more leader Association that promotes transformational and visible leadership in the community by fostering development and interacation betwwen Alumni,Srudents and the industry global</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                <div class="person">
                 
                  <h2>PURPOSE</h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div> --}}

        <hr>
        <div class="site-section bg-image overlay"  id="governance">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade">PERKS OF THE SYSTEM</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="how-it-work-item">
                  <i class="fas fa-brain fa-5x"></i>
                  
                  <br>
                  
                  <div class="how-it-work-body">
                    <br>
                    <h2>DATA IMAGE</h2>
                    <hr>
                    <br>
                    <p class="mb-5">The system is adapated to process all sorts of medical imaging formats be it dcom or png MRI images</p>
                    <!-- <ul class="ul-check list-unstyled success">
                      <li class="text-white">Error minus sint nobis dolor</li>
                      <li class="text-white">Voluptatum porro expedita labore esse</li>
                      <li class="text-white">Voluptas unde sit pariatur earum</li>
                    </ul> -->
                  </div>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <i class="fas fa-cogs fa-5x"></i>
                <div class="how-it-work-item">
                  
                  <div class="how-it-work-body">
                    <br>
                    <h2>MODEL </h2>
                    <hr>
                    <br>
                    <p class="mb-5">The program uses state of the art Image Classsifiction models from Tensorflow with and accuracy of above 86% </p>
                    <!-- <ul class="ul-check list-unstyled success">
                      <li class="text-white">Error minus sint nobis dolor</li>
                      <li class="text-white">Voluptatum porro expedita labore esse</li>
                      <li class="text-white">Voluptas unde sit pariatur earum</li>
                    </ul> -->
                  </div>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                <div class="how-it-work-item">
                  <i class="fas fa-hourglass-start fa-5x"></i>
                  <div class="how-it-work-body">
                    <h2>Efficient</h2>
                    <hr>
                    <br>
                    <p class="mb-5">The model is effiecient and accurate in its predictions</p>
                    
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
         <div class="site-section border-bottom" id="section-our-team">
          <div class="container">
            <div class="row justify-content-center mb-5">
              <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary" data-aos="fade">Our Team</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="person">
                  <img src="{{ asset('images/br.jpg') }}" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                  <h3>Christine Rooster</h3>
                  <p class="position text-muted">Co-Founder, President</p>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                <div class="person">
                  <img src="{{ asset('images/sec.jpg') }}" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                  <h3>Brandon Sharp</h3>
                  <p class="position text-muted">Co-Founder, COO</p>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                <div class="person">
                  <img src="{{ asset('images/suits2.jpg') }}" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
                  <h3>Connor Hodson</h3>
                  <p class="position text-muted">Marketing</p>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                  <ul class="ul-social-circle">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    
    
    
    
    
      
    
        
    
     
    
    
        
 
    
 
    
      
        
        
                </div>
            </div>
        </div>
    </div>
    

@endsection
