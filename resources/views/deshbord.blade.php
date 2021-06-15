 @include('layouts1.head')

   
  <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container" style="min-height:400px;padding-top:120px;padding-bottom:120px;">
        <div class="row">
          <div class="col-md-8">
            <div class="content-box">
              <h2>Welcome To Admin Zone</h2>
              <p>Administrator can manage and server the whole portal from here...</p>
            </div>
            <div class="col-sm-3" style="float:left;">
      <a href="{{url('studentshow')}}"><div class="col-sm-12 bt">All Students</div></a>
      </div>
            <div class="col-sm-3" style="float:left;">
      <a href="tutor.html"><div class="col-sm-12 bt">All Tutors</div></a>
      </div>
      <div class="col-sm-3" style="float:left;">
      <a href="{{url('showcontect')}}"><div class="col-sm-12 bt">All Queries</div></a>
      </div>
      <div class="col-sm-3" style="float:left;">
      <a href="{{url('logout1')}}"><div class="col-sm-12 bt">Log Out</div></a>
      </div>
                   
      </div>
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->
    @include('layouts1.footer')