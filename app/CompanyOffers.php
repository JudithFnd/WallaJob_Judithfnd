<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class CompanyOffers extends Model
{

    protected $table = 'company_offers';
    public $timestamps = false;

    protected $fillable = ['id_company', 'name', 'description', 'vacancies', 'id_category', 'status', 'id_admin', 'salary'];

}