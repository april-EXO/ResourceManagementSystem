<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationRecord extends Model
{
	use HasFactory;
	protected $table = "donation_records";

	public function getDonationResourcesRelation(){
        return $this->hasMany(related: 'App\Models\ResourcesDonation', foreignKey: 'donation_records_id', localKey:'id');
    }
}