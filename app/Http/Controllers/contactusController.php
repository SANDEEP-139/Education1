<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\contactusModel;
use DB;
class contactusController extends Controller
{
//
public function contates(request $request)
{
	$name=$request->input('name'); 
	$contact=$request->input('contact'); 
	$email=$request->input('email'); 
	$msg=$request->input('msg');
	//dd($msg);
	//exit(0);
	 if($name !='' && $contact !=''&& $email != ''&&  $msg != ''){
  $data= array('name'=>$name,'contact'=>$contact,"email"=>$email,"msg"=>$msg);
	//dd($data);
	 	    $value = contactusModel::contectData($data);
     if($value){
  // echo $value;
     	return redirect(url('home1'));
 }else{
   echo 0;
 }

}else{
   echo 'Fill all fields.';
}

exit; 
	 }

public function showcontect()
 {

   //$user1=contactusModel::all();
   $user1 = DB::table('tbl_contactus')
        ->select('*')
        ->orderBy('name', 'asc')
        ->get();

  //dd($user1);
  
  if(!$user1)
    {
        
        return redirect(url('showcontect'));
    }
  return view('showcontect')->with(compact('user1'));
  dd($user1);
}

     public function delete(Request $request,$id)
      {
      $banner=contactusModel::findOrFail($id);
     // dd($banner)
   $banner->delete();
   return redirect(url('showcontect'))->with('status','your data is insert');
  }

}


    