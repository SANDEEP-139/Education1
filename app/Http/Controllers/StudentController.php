<?php

namespace App\Http\Controllers;
use App\Student;
use Auth;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
  //
  public function reginsert(Request $request)
  {
   
    //echo $id;
    $firstname=$request->input('firstname'); 
    // dd($firstname);
    $lastname=$request->input('lastname'); 
    $email=$request->input('email');
    $phone=$request->input('phone');
    $gender=$request->input('gender');
    $highestqulification=$request->input('highestqulification');
    $lerrnigplan=$request->input('lerrnigplan');
    $file=$request->file("image");
      // dd($file);
	if($request->hasFile("image"))
	 {
	 	$filename=$file->getClientOriginalName();
	 	$file->move("upload/",$filename);
	 	//$request->image=$filename;
	 }
      $password=$request->input('password');
   $repassword=$request->input('repassword');
   if($firstname !='' && $lastname !=''&& $email != ''&&  $phone != ''&& $gender != ''&& $highestqulification != ''&& $lerrnigplan != ''&& $file != ''&& $password != ''&& $repassword != ''){
    $data = array('firstname'=>$firstname,'lastname'=>$lastname,"email"=>$email,"phone"=>$phone,"gender"=>$gender,"highestqulification"=>$highestqulification,"lerrnigplan"=>$lerrnigplan,"image"=>$filename,"password"=>$password,"repassword"=>$repassword);
//dd($data);
         $value = Student::insertData($data);
	     if($value){
     echo $value;
	     	return redirect(url('home1'));
   }else{
     echo 0;
   }

 }else{
     echo 'Fill all fields.';
 }

 exit; 


  }

   public function studentshow()
  {
    if(Auth::user()){
      // $user1=Student::all();

      $user1 = DB::table('tbl_regester')
          ->select('*')
          ->orderBy('firstname', 'asc')
          ->get();

     // dd($user1);
    
      if(!$user1)
      {
          
          return redirect(url('studentshow'));
      }
      return view('studentshow')->with(compact('user1'));
    }else{
      return redirect('login1');
    }
  }
   
    public function updateshow(Request $req,$id)
     {
  
      $user2=student::find($id);
    // dd($user2);
      if(!$user2)
      {
          
          return redirect(url('updateshow'));
      }
      return view('updateshow')->with(compact('user2'));
  }
  public function update(Request $req,$id)
  {
    $update= Student::find($id);
    //dd($update);
    $update->firstname=$req->firstname;
     //dd($update);
    $update->lastname=$req->lastname;
    $update->email=$req->email;
    $update->phone=$req->phone;
    $update->gender=$req->gender;
    $update->email=$req->email;
    $update->highestqulification=$req->highestqulification;
    $file=$req->file("image");
      // dd($file);
  if($req->hasFile("image"))
   {
    $filename=$file->getClientOriginalName();
    $file->move("upload/",$filename);
    //$request->image=$filename;
   }
   $update->image=$filename;

   $update->password=$req->password;
   $update->repassword=$req->repassword;
  
    $update->save();
    return redirect('studentshow');
  
  }

  public function delete1(Request $request,$id)
  {
  //dd($id)
  $banner=Student::findOrFail($id);      //dd($banner)
  $banner->delete();
  return redirect(url('studentshow'))->with('status','your data is deleted');
  }
}
