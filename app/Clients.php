<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fname', 'lname', 'phone', 'email', 'agent', 'gender'];

}
