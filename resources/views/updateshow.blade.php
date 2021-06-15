   @include('layouts1.head')
<style type="text/css">
 
</style>
    <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="{{url('images/vector.png')}}" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7" style="margin-top:0px;">
      <div class="content-box">
              <h2>Update</h2>
            </div>
            <form action="{{url('/update')}}/{{$user2->id}}" method="post" enctype="multipart/form-data">
            
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="f_name" style="color:#6d4c41;">First name</label>
                  <input type="text" value="{{$user2->firstname}}" class="form-control" id="f_name" name="firstname" placeholder="First name..." >
                </div>
                <div class="form-group col-sm-6">
                  <label for="l_name" style="color:#6d4c41;">Last name</label>
                  <input type="text" value="{{$user2->lastname}}" class="form-control" id="l_name" name="lastname" placeholder="Incomplete name without surname...">
                </div>
                <div class="form-group col-sm-6">
                  <label for="email" style="color:#6d4c41;">Email</label>
                  <input type="email" value="{{$user2->email}}" class="form-control" id="email" name="email" placeholder="Email address" readonly/>
                </div>
                <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Contact number</label>
                  <input type="text" value="{{$user2->phone}}" class="form-control" id="phone" name="phone" placeholder="I want to call you...">
                </div>
              
        <div class="form-group col-sm-6">
                  <label for="phone"  style="color:#6d4c41;">Gender</label>
                  <select name="gender"  class="form-control" value="{{$user2->gender}}">
          <option value="">Select Gender</option>
          <option value="Male" <?php if($user2->gender == 'Male') { echo "selected"; }?>>Male</option>
          <option value="Female" <?php if($user2->gender == 'Female') { echo "selected"; }?>>Female</option>
          </select>
                </div>
          <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;"value="{{$user2->highestqulification}}">Highest Qualification</label>
                  <select name="highestqulification" class="form-control">
          <option value="">Select Qualification</option>
          <option value="Highschool"<?php if($user2->highestqulification == 'Highschool') { echo "selected"; }?>>Highschool</option>
          <option value="Intermideate"<?php if($user2->highestqulification == 'Intermideate') { echo "selected"; }?> >Intermideate</option>
          <option value="Diploma"<?php if($user2->highestqulification == 'Diploma'){ echo "selected"; }?>>Diploma</option>
          <option value="BCA"<?php if($user2->highestqulification == 'BCA'){ echo "selected"; }?>>BCA</option>
          <option value="B.Tech"<?php if($user2->highestqulification == 'B.Tech'){ echo "selected"; }?>>B.Tech</option>
          <option value="MCA"<?php if($user2->highestqulification == 'MCA'){ echo "selected"; }?>>MCA</option>
          <option value="M.Tech"<?php if($user2->highestqulification == 'M.Tech'){ echo "selected"; }?>>M.Tech</option>
          </select>
                </div>
        <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Learning Plan</label>
                  <select name="lerrnigplan" class="form-control">
          <option value="">Select Course Which You Want To Prefer</option>
          <option value="Computer Language"<?php if($user2->lerrnigplan == 'Computer Language'){ echo "selected"; }?>>Computer Language</option>
          <option value="Desigining"<?php if($user2->lerrnigplan == 'Desigining'){ echo "selected"; }?> >Desigining</option>
          <option value="Developement"<?php if($user2->lerrnigplan == 'Developement'){ echo "selected"; }?>>Developement</option>
          <option value="Desktop Management"<?php if($user2->lerrnigplan == 'Desktop Management'){ echo "selected"; }?>>Desktop Management</option>
          <option value="Networking"<?php if($user2->lerrnigplan == 'Networking'){ echo "selected"; }?>>Networking</option>
          </select>
                </div>
        <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Profile Picture</label>
                  <input type="file" style="padding-top:2px;" class="form-control" 
                  id="phone" value="{{$user2->image}}" name="image"/>
                </div>
        <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Password</label>
                  <input type="password" value="{{$user2->password}}" class="form-control" id="phone" name="password" placeholder="Secure Your Password"/>
                </div>
        <div class="form-group col-sm-6">
                  <label for="phone" style="color:#6d4c41;">Confirm Password</label>
                  <input type="password" value="{{$user2->repassword}}" class="form-control" id="phone" name="repassword" placeholder="Make Sure It...">
                </div>
              </div>         
              <input type="submit" id="btn" class="btn btn-default" value="Update"/>
            </form>
           </div>          
    </section>
  <!-- Login / Registration end -->
  @include('layouts1.footer')
