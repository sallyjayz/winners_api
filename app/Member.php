<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
    protected $fillable = ['title', 'first_name', 'last_name',
    'residential_address', 'service_unit','year_joined', 'church_growth_squad',
    'tel_no','whatsapp_tel_no', 'birth_date','occupation', 'marital_status',
    'created_at', 'updated_at'];
}

?>
