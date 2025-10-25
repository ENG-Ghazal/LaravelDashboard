<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadMaster extends Model
{
    use HasFactory;
    public $fillable = [
    'first_name','middle_name','last_name',
    'address','phone','birthdate',
    'certificates','note','image'];

    public function getImagePathAttribute()
    {
        return $this->image ? asset('uploads/head_master/'.$this->image): null;
    }
}
