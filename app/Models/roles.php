<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $fillable =[
    'name'
];
 public function  users(){
    return $this->hasMany(User::class, 'roles_id');
 }

 public function products()
 {
    return $this->hasMany(product::class);
 }
}
