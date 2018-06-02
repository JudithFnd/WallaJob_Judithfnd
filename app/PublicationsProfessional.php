<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class PublicationsProfessional extends Model
{

    protected $table = 'publications_professional';
    public $timestamps = false;

    protected $fillable = ['id', 'id_professional', 'name', 'type_professional', 'short_description', 'description', 'id_category', 'city', 'status', 'id_admin', 'price'];

}