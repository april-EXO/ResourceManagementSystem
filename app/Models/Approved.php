<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    use HasFactory;
	protected $table = 'beneficiaries';

    public function getResourcesRelation(){
        return $this->hasMany(related: 'App\Models\Resources', foreignKey: 'beneficiary_id', localKey:'id');
    }
}