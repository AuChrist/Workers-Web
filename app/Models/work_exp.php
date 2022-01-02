<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work_exp extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user_detail(){
        return $this->BelongsTo(user_detail::class);
    }

}
