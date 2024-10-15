<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'img',
        'address',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function student(){
        return $this->hasMany(Student::class,'guardian_id');
    }
    // public function teacher(){
    //     return $this->hasManyThrough(Teacher::class,Student::class);
    // }
    public function teachers()
{
    return $this->hasManyThrough(Teacher::class, Student_Teacer::class );
}

public function messages()
{
    return $this->hasMany(behaviour::class);
}
public function behav (){
    return $this->hasManyThrough(behaviour::class,Student::class);
}

}
