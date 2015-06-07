<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

 class CreateAdulteRequest extends FormRequest {

	/** 
	* Determine if the user is authorized to make this request
	  Determine si l'utilisateur est authorisé d'effectuer cette requete
	*
	*@return bool
	*/
	public function authorize()
	{
		return true;
	}
	
	/**
	* Obtient les règles de validations pour effectuer la requête
	*
	*@return array
	*/
	public function rules()
	{
		return [
				'nom'=>'required',
				'prenom'=>'required',
				'adresse'=>'required',
				'ville'=>'required',
				'dernierdiplome'=>'required'
		];
	}

}
