@extends('layouts.main')

@section('content')    
    <!-- Start Title Area-->
      <div class="container" id="hero">
          <div class="row text-center h-100 d-flex align-items-center justify-content-center" >
            <div class="col">
                  <h2>Hi, I'm Saddad Nabbil</h2>
                  <div class="wrapper">
                      <ul class="dynamic-txts">
                          <li><span>Web Developer</span></li>
                          <li><span>Tech Enthusiast</span></li>
                          {{-- <li><span>Student</span></li> --}}
                      </ul>
                  </div>
                  <a href="#project" class="btn btn-dark btn-sm" style="background-color: #3e454f; border: 0px;">
                      <i class="fa fa-arrow-down justify-content-center" aria-hidden="true" style="color: #fff;">
                      </i>
                  </a>
          </div>
            </div>
          </div>
      </div>
    <!-- End Title Area -->

    <!-- Start Project Area -->
    <div class="container pt-5" id="project">
      <div class="row text-center">
        <div class="col-lg-8 mx-auto">
          <h2>Result of Something I Learned</h2>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="project-info">
              <a href="https://stage.inibae.com/">
                <img src="assets/images/project/inibae.png" class="img-fluid" alt="project image">
                <a href="https://stage.inibae.com/" class="text-dark text-decoration-none"><p>inibaecom</p></a>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="project-info">
              <a href="https://bnart1.inibae.com/">
                <img src="assets/images/project/bnakas.png" class="img-fluid" alt="project image">
                <a href="https://bnart1.inibae.com/" class="text-dark text-decoration-none"><p>bna kas</p></a>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="project-info">
              <a href="https://saddadnabbil.my.id/webif/">
                <img src="assets/images/project/2.png" class="img-fluid" alt="project image">
                <a href="https://saddadnabbil.my.id/webif/" class="text-dark text-decoration-none"><p>webif<p></a>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="project-info">
              <a href="https://dynatech-int.com">
                <img src="assets/images/project/dti.png" class="img-fluid" alt="project image">
                <a href="https://dynatech-int.com" class="text-dark text-decoration-none"><p>dynatech international</p></a>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="project-info">
              <a href="https://ascentia.co.id/">
                <img src="assets/images/project/ascentia.png" class="img-fluid" alt="project image">
                <a href="https://ascentia.co.id/" class="text-dark text-decoration-none"><p>ascentia</p></a>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="project-info">
              <a href="https://sdn1nameng.inibae.com/">
                <img src="assets/images/project/3.png" class="img-fluid" alt="project image">
                <a href="https://sdn1nameng.inibae.com/" class="text-dark text-decoration-none"><p>sdn 1 nameng</p></a>
              </a>
            </div>
          </div>

          

          <div class="item">
            <div class="project-info">
              <a href="https://lelebae.inibae.com/">
                <img src="assets/images/project/1.png" class="img-fluid" alt="project image">
                <a href="https://lelebae.inibae.com/" class="text-dark text-decoration-none"><p>lelebae</p></a>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Project Area -->

    <!-- Start Location Area -->
    <div class="container" id="find">
      <div class="row justify-content-center">
        <div class="d-flex flex-column gmap_canvas mb-5">
        <h2 class="text-center mb-5">Find Me  
        </h2>
        <iframe width="1367" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Inibae.com%20malangnengah&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <br>
        </div>
      </div>
      </div>
      </div>
    </div>
    <!-- End Location Area -->

    

@endsection
