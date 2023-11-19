<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected  $table = 'contact';
    protected $PrimeryKey = 'id';
     protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
     ];
}
