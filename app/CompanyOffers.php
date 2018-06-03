<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class CompanyOffers extends Model
{

    protected $table = 'company_offers';
    public $timestamps = false;

    protected $fillable = ['id_company', 'name', 'work_schedule', 'short_description', 'description', 'vacancies', 'id_category', 'city', 'status', 'id_admin', 'salary'];

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }
}