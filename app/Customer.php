<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Define the table 
    protected $table = 'CUSTOMERS';
    protected $primaryKey = 'CUSTOMER_ID';
    //TODO: validate date format
    protected $dateFormat = 'U';

    //protected $connection = 'mysql';
    
}
