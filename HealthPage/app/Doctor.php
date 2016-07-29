<?php
	namespace App;
	use Illuminate\Database\Eloquent\Model;
	use App\User;
	use App\Patient;

	class Doctor extends Model{

		public function users(){
			return $this->hasMany(Users::class);
		}
	}