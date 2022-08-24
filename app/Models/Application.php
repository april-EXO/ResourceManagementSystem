<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
	protected $table = 'beneficiary_applications';

    public function getResourcesApplyRelation(){
        return $this->hasMany(related: 'App\Models\ResourcesApply', foreignKey: 'beneficiary_applications_id', localKey:'id');
    }
}