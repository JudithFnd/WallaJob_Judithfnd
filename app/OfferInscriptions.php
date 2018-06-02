<?php
 
namespace App;
use Illuminate\Database\Eloquent\Model;

class OfferInscriptions extends Model
{

    protected $table = 'offer_inscription';
    public $timestamps = false;

    protected $fillable = ['id', 'id_offer', 'id_professional'];

}