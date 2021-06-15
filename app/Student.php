<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Student extends Model
{
         protected $table='tbl_regester';
    	public $timestamps=false;



    	public static function insertData($data)
    	{
        $insertid = DB::table('tbl_regester')->insertGetId($data);
       // dd($insertid);
        return $insertid;
   }

  
}
