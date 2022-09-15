<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participant extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phoneNo','address','workshopID'];
    //  $table->string('name',255);
    //$table->string('email',255);
    // $table->string('phoneNo',255);
    // $table->string('address',255);
    // $table->string('workshopID',10);

  
}
