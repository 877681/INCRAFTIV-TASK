<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    //protected $fillable = ['employer_id','title', 'salary'] ;

    //guarded variable is used to gaurd the columns which you dont want to be mass assigned but since i am leaving it empty that means i am disabling fillables 
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    //TO ACCESS EMPLOYER TABLE 

    public function tags()
    {
        return $this->belongsToMany(Tag::class,foreignPivotKey:'job_listing_id');
    }
    // to access to tag table 
}
