 @include('layouts1.head')
   <!-- Login / Registration start -->
    <section class="banner login-registration">
      <div class="vector-img">
        <img src="images/vector.png" alt="">
      </div>
      <div class="container" style="min-height:400px;">
	  <div class="col-md-8" style="padding-bottom:10px;">
	  <h3 style="text-align:center;">All Students</h3>
	  </div>
        <div class="row">
          <div class="col-md-8">
			<div class="row">
           <table border="2" class="table table-hover">
			<tr align="center" style="background:rgba(255,255,255,0.7);">
				<th>Sr.No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Image</th>
        <th>Update</th>
        <th>Delete</th>
			</tr>
        <?php 
          $i = 0;
        ?>
      					 @foreach ($user1 as $user)
                <tr>
                  <tr align="center" style="background:rgba(255,255,255,0.9);">
                  <td>{{ ++$i}}</td>
                  <td>{{ ucfirst($user->firstname).' '.ucfirst($user->lastname) }}</td>
                  <td>{{ $user->email}}</td>
                  <td>{{ $user->phone}}</td>
                  <td><img src="{{url('upload/'.$user->image)}}"></td>
                  <td><a href="{{url('updateshow/'.$user->id)}}"class="fa fa-edit" ></a></td>
            <td>
               <a href="#" onclick="delete_std('{{ $user->id}}')" style="color:#009688;font-size:17px;"><i class="fa fa-trash"></i></a>
                </tr>
                @endforeach
		   </table>
		  </div></div>
        </div>
      </div>      
    </section>
  <!-- Login / Registration end -->

      @include('layouts1.footer')
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        function delete_std(id)
        {
          swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href="{{url('delete1')}}/"+id;
            }
          });
                 
        }
      
    </script>
