<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientData extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['client_id', 'salary', 'means_id', 'birth_year', 'birth_month', 'birth_day', 'city_birth', 'birth_country', 'native_country', 'address', 'city', 'region', 'postal_code', 'contact_country', 'marital_status', 'kids', 'irs', 'rf', 'bn', 'wn', 'sn', 'proof'];

}
