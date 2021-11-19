<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $table   = 'replies';
    
    protected $guarded = [];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }//end of seller

}//end of model
