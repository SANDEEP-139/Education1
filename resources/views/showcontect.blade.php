     @include('layouts1.head')
  <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container" style="min-height:400px;">
	  <div class="col-md-8" style="padding-bottom:10px;">
	  <h3 style="text-align:center;">All Queries</h3>
	  </div>
        <div class="row">
          <div class="col-md-8" >
			<div class="row">
           <table border="2" class="table table-hover">
			<tr align="center" style="background:rgba(255,255,255,0.7);">
				<th>Sr.No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Message</th>
				<th>Delete</th>
			</tr>
      <<?php 
       $i=0;
       ?>
			@foreach($user1 as $user)
			<tr align="center" style="background:rgba(255,255,255,0.9);">
				<td>{{++$i}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->contact}}</td>
				<td>{{$user->msg}}</td>
				<td><a href="#" style="color:#6d4c41;text-decoration:none;" onclick="delete_std()"><button class="btn">Delete</button></a></td>
			</tr>
			@endforeach
		   </table>
		  </div></div>
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->
     @include('layouts1.footer')
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        function delete_std()
        {
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href="{{url('delete/'.$user->id)}}"
            }
          });
                 
        }
        
 
      </script>
