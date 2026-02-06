<?php

namespace App\Helpers;
use DB;
class Helpers {

    public static  function  getcolumnname($table,$columm,$id)
    {
        
        $query =  DB::table($table);
        $query->where('id',$id);
        // Conditionally add another where
        $rows = $query->first();
        if(!empty($rows)){
        //print_r($rows); die();
          return $rows->$columm;
        }else{
            return ''; 
        }
    }

}