<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMedia extends Model
{
    //Define the table 
    protected $table = 'CUSTOMER_MEDIA';
    protected $primaryKey = 'CUSTOMER_MEDIA_ID';
    //TODO: validate date format
    //U is timestamp (seconds from epoch)
    //Y-m-d H:i:s is the Carbon format default (?)
    protected $dateFormat = 'Y-m-d H:i:s';

    //protected $connection = 'mysql';


    /**
     * Get the Customer that purchased the media.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'CUSTOMER_ID','CUSTOMER_ID');
    }

}
