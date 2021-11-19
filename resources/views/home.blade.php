 @include('layouts.head')

    @include('layouts.header')
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Header strat -->
    <header class="header abs-header" style="background:#6d4c41;">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="home-01.html" class="logo">
            <span style="color:white;"><i style="color:#ff8800;font-size:50px;font-weight:bold;font-family:Monotype Corsiva;">e </i><b style="font-size:20px;color:white;">-</b> <font style="font-size:30px;font-weight:bold;font-family:Monotype Corsiva;color:white;">Learning</font></span>
          </a>
          <a href="javascript:void(0);" id="mobile-menu-toggler">
            <i class="ti-align-justify"></i>
          </a>
          <ul class="navbar-nav">
            <li class="urrent-menu-item">
              <a href="home.html">Home</a>
            </li>
            <li><a href="about.html">About Us</a></li>
            <li class="">
              <a href="#">Courses</a>
            </li>
            <li class="">
              <li><a href="signup.html">Sign up</a></li>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="login.html">Log in</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- Header strat -->

    <!-- Banner start -->
    <section class="banner ban-01">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7">
            <div class="banner-content">
              <h2  style="color:#6d4c41;">Education !</h2><h3  style="color:#6d4c41;">Imagination is the best education. </h3>
              <p  style="color:#6d4c41;">E-learning is the delivery of a learning programme by electronic means; it includes web-based learning, virtual classrooms, digital collaboration and delivery of content through internet. It can be combined with face-to-face learning with a teacher, in blended learning.</p>
              <a href="#features" class="btn btn-default">Start Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner start -->

    <!-- Main form start -->
    <section class="main-form">
      <div class="container">
        <div class="m-search-form nm-top-130">
          <form action="" method="post">
            <input type="text" placeholder="Your Good Name Please.." name="name" value=""/>
            <input type="text" placeholder="Your Contact No.." name="contact" value=""/>
            <input type="email" placeholder="Your Email Please.." name="email" value=""/>
            <input type="text" maxlength="200" placeholder="Your Message.." name="msg" value=""/>
            <button class="btn" id="btn" type="submit">SAVE</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Main form end -->

    <!-- Feature section start -->
    <section class="feature pt-3" id="features">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/1.png" alt="" class="img-icon">
              <h5 style="color:#6d4c41;">Distance Learning</h5>
              <p text-align="justify">Distance education or long-distance learning is the education of students who may not always be physically present at a school.Traditionally, this usually involved correspondence courses wherein the student corresponded with the school via post. Today it involves online education.</p>
              <a href="#" class="read-more btn">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/2.png" alt="" class="img-icon">
              <h5 style="color:#6d4c41;">Qualified Trainers</h5>
              <p text-align="justify">In this technological world that we live in, it is very important for teachers to be in step with new technologies. <br/>Tutors will be able to adapt their teaching methods to their learners’ needs and they will improve their own IT abilities.
			 </p>
              <a href="#" class="read-more btn">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="iconBox">
              <img src="images/icons/3.png" alt="" class="img-icon">
              <h5 style="color:#6d4c41;">Job Opportunity</h5>
              <p text-align="justify">We all know that there are no difficulties of find  a job. This is bit of difficulte to find a good job that imporve you and your skills also. <br/>That is our responsibility to provide a good job to you that meet you your desire and deams. We are always trying to made you the best.</p>
              <a href="#" class="read-more btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Feature section end -->

    <!-- Work section start -->
    <section class="work bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title" style="color:#6d4c41;">We Work Best When We Work Together</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 process1">
            <div class="card mb-5 mb-lg-0">
              <div class="process">
                <h3 style="color:#6d4c41;">For Student</h3>
                <ul>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/1.png" alt="">
                    </span>
                    <h5><a href="#registration" style="color:#6d4c41;">Free Registration</a></h5>
                    <p>There are no application fees for new registration. Please register yourself in our portal for demo classes.</p>
                  </li>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/2.png" alt="">
                    </span>
                    <h5><a href="#tutor" style="color:#6d4c41;">Find Your Tutor</a></h5>
                    <p>You can find your best tutor for learning.</p>
                  </li>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/3.png" alt="">
                    </span>
                    <h5>Schedule A Lesson</h5>
                    <p>You can shedule your lession according to you at when you want to.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 process1">
            <div class="card">
              <div class="process">
                <h3>For Tutor</h3>
                <ul>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/4.png" alt="">
                    </span>
                    <h5><a href="#registration" style="color:#6d4c41;">Registration</a></h5>
                    <p>Our tutors can register students for learning at free of cost.</p>
                  </li>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/5.png" alt="">
                    </span>
                    <h5>Create Tutor Profile</h5>
                    <p>Every tutor can create their profile for detailing themselves.</p>
                  </li>
                  <li>
                    <span class="icon-bg">
                      <img class="icon" src="images/icons/process/6.png" alt="">
                    </span>
                    <h5>Schedule A Lesson</h5>
                    <p>Tutor can schedule their lession according their students.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Work section end -->

    <!-- Tutor section start -->


    <!-- Call to action section start -->
    <section class="callto-action"  style="background:#6d4c41 ;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h3>Want To Become a Tutor</h3>
            <p>Success And Spirit In Our School</p>
          </div>
          <div class="col-md-4 text-md-right">
            <a href="#" class="btn btn-default" id="btn1">Register Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to action section end -->
    
    <!-- Nearby students section start -->
    <section class="nearby-students">
      <div class="container">
        <div class="row" id="tutor">
          <div class="col-lg-6 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title">Find us Here</h3>
            </div>
          </div>
        </div>
        <div class="row" style="border:2px solid #6d4c41;">
          <div class="col-lg-4" style="border:px solid #6d4c41;">
            <div class="student-search-form">
              <h3>Find Your Tutor</h3>
              <form action="#">
                <input type="text" placeholder="Enter Tutor Id">
                <input type="text" placeholder="Enter Tutor Name">
                <input type="text" placeholder="Enter Subject Name">
                <button type="submit" class="btn btn-filled">Search Tutor</button>
              </form>
            </div>
          </div>
          <div class="col-lg-8">
           
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14232.646640223778!2d80.9663807!3d26.8983641!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffa47f1efe103f0d!2sTechpile%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1574226861511!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
          </div>
        </div>
      </div>
    </section>
    <!-- Nearby tutors section end -->
	
    <!-- Contact section start -->
    <section class="contact">
      <div class="container" id="registration">
        <div class="row">
          <div class="col-lg-7 col-md-9 m-auto text-center">
            <div class="sec-heading">
              <h3 class="sec-title" style="text-transform:uppercase;">join us as student/registration </h3>
            </div>
          </div>
        </div>
        <div class="row" class="contact-form">
          <div class="col-md-10 m-auto">
            <form action="{{url('saveregister')}}" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="f_name" style="color:#6d4c41;">First name</label>
                  <input type="text" style="border:2px solid #6d4c41;" class="form-control" id="f_name" name="firstname" placeholder="First name..." >
                </div>
                <div class="form-group col-sm-6">
                  <label for="l_name" style="color:#6d4c41;">Last name</label>
                  <input type="text" style="border:2px solid #6d4c41;" class="form-control" id="l_name" name="lastname" placeholder="Incomplete name without surname...">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email" style="color:#6d4c41;">email</label>
                  <input type="email" style="border:2px solid #6d4c41;" class="form-control" id="email" name="email" placeholder="Email address" >
                </div>
                <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Contact number</label>
                  <input type="text" style="border:2px solid #6d4c41;" class="form-control" id="phone" name="phone" placeholder="I want to call you...">
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Gender</label>
                  <select name="gender" style="border:2px solid #6d4c41;height:46px;border-radius:0px;font-size:13px;color:#6d4c41;" class="form-control">
				  <option value="">Select Gender</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				  </select>
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Highest Qualification</label>
                  <select name="highestqulification" style="border:2px solid #6d4c41;height:46px;border-radius:0px;font-size:13px;color:#6d4c41;" class="form-control">
				  <option value="">Select Qualification</option>
				  <option value="Highschool">Highschool</option>
				  <option value="Intermideate">Intermideate</option>
				  <option value="Diploma">Diploma</option>
				  <option value="BCA">BCA</option>
				  <option value="B.Tech">B.Tech</option>
				  <option value="MCA">MCA</option>
				  <option value="M.Tech">M.Tech</option>
				  </select>
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Learning Plan</label>
                  <select name="lerrnigplan" style="border:2px solid #6d4c41;height:46px;border-radius:0px;font-size:13px;color:#6d4c41;" class="form-control">
				  <option value="">Select Course Which You Want To Prefer</option>
				  <option value="Computer Language">Computer Language</option>
				  <option value="Desigining">Desigining</option>
				  <option value="Developement">Developement</option>
				  <option value="Desktop Management">Desktop Management</option>
				  <option value="Networking">Networking</option>
				  </select>
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Profile Picture</label>
                  <input type="file" style="border:2px solid #6d4c41;" class="form-control" id="phone" name="image"/>
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Password</label>
                  <input type="password" style="border:2px solid #6d4c41;" class="form-control" id="phone" name="password" placeholder="Secure Your Password"/>
                </div>
				<div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Confirm Password</label>
                  <input type="password" style="border:2px solid #6d4c41;" class="form-control" id="phone" name="repassword" placeholder="Make Sure It...">
                </div>
              </div>         
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </section>
    @include('layouts.footer')