<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Define the table 
    protected $table = 'CUSTOMERS';
    protected $primaryKey = 'CUSTOMER_ID';
    //TODO: validate date format
    //U is timestamp (seconds from epoch)
    //Y-m-d H:i:s is the Carbon format default (?)
    protected $dateFormat = 'Y-m-d H:i:s';

    //protected $connection = 'mysql';

    /**
     * Get the media records associated with the customer.
     */
    public function customerMedia()
    {
        return $this->hasMany('App\Phone','CUSTOMER_ID','CUSTOMER_ID');
    }
}
