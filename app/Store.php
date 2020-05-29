<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];
    
    public function user()
    {
        $this->belongsTo(User::class, 'usuario_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
