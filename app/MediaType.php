<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{
    //
        //Define the table 
        protected $table = 'MEDIA_TYPE_LOV';
        protected $primaryKey = 'MEDIA_TYPE';
        
        //U is timestamp (seconds from epoch)
        //Y-m-d H:i:s is the Carbon format default (?)
        protected $dateFormat = 'Y-m-d H:i:s';
    
        //protected $connection = 'mysql';
    
    
      public function AllMediaTypes () {
        return App\MediaType::orderBy('MEDIA_TYPE');
      }  
}
