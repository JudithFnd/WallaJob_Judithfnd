<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class UsersProfessionals extends Model
{

    protected $table = 'users_professionals';
    public $timestamps = false;

    protected $fillable = ['id', 'id_user', 'name', 'surname', 'surname2', 'birthdate', 'dni', 'sex', 'country', 'city', 'direction', 'phone_number', 'studies', 'work_experience', 'image'];

}