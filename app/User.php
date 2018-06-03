<?php
 
namespace App;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

 
class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    public $timestamps = false;

    public function getId()
    {
    return $this->id;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type_user', 'email', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Add a mutator to ensure hashed passwords
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

        // Relación User con UsersProfessionals
    public function userProfessional() { // one to one
        return $this->hasOne('App\UsersProfessionals', 'id_user', 'id'); // Le indicamos que se va relacionar con el atributo id
    }
    
    // Relación User con UserCompany
    public function companyOffers() { // many
        return $this->hasMany('App\CompanyOffers', 'id_company', 'id'); // Le indicamos que se va relacionar con el atributo id
    }
}