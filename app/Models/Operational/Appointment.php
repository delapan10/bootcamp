<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    //use HasFactory;

    use SoftDeletes;

    //declare table
    public $table ='appointment';

    //this field must type date yyyy--mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    //declare fillable
    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     //one to Many
    public function user()
    {
         // 3 parameters (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    //one to Many
    public function doctor()
        {
            // 3 parameters (path model, field foreign key, field primary key from table hasMany/hasOne)
            return $this->belongsTo('App\Models\Operational\Doctor','doctor_id','id');
        }

         //one to Many
    public function consultation()
    {
    // 3 parameters (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo('App\Models\MasterData\consultation','consultation_id','id');
    }

     //one to one
    public function transaction()
    {
        // 2 parameters (path model, field foreign key)
        return $this->hasOne('App\Models\Operational\Transaction','appointment_id');
    }


}
