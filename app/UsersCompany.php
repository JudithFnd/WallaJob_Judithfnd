<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class UsersCompany extends Model
{

    protected $table = 'users_company';
    public $timestamps = false;

    protected $fillable = ['id', 'id_user', 'name', 'cif', 'country', 'city', 'direction', 'phone_number', 'contact_name', 'url_image'];

}