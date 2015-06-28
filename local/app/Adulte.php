<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Adulte extends Model {

	 protected $fillable = ['nom', 'prenom', 'adresse','ville','dernierdiplome'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $nom = '';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $prenom = '';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $dernierdiplome = '';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $ville = '';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $adresse = '';
}
