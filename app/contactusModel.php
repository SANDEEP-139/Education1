<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class contactusModel extends Model
{
    //
     protected $table='tbl_contactus';
    	public $timestamps=false;



    	public static function contectData($data)
    	{
        $insertid = DB::table('tbl_contactus')->insertGetId($data);
       // dd($insertid);
        return $insertid;
        }
}