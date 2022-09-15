<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshop extends Model
{
    use HasFactory;

    //  $table->string('id', 10)->primary();
    // $table->string('name',255);

    protected $fillable = ['name'];

    public function workshop()
    {
        return $this->belongsTo(participant::class);
    }

}
