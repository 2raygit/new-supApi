<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Models\Permission;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property string $email
 * @property string $password
 * @property string $adresse
 * @property string $nationalite
 * @property string|null $telephone
 * @property string $remember_token
 * @property Carbon|null $email_verified_at
 *
 * @property Collection|Evaluation[] $evaluations
 * @property Collection|Event[] $events
 * @property Collection|Note[] $notes
 * @property Collection|Reclamation[] $reclamations
 *
 * @package App\Models
 */
class User extends Authenticatable
{

    use HasRoles ,HasApiTokens,Notifiable;

	protected $table = 'users';

    protected $guard_name = 'web';

	public $incrementing = false;

	public $timestamps = false;

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'prenom',
		'nom',
		'email',
		'password',
		'adresse',
		'nationalite',
		'telephone',
		'remember_token',
		'email_verified_at'
	];

    # Pour Amdin

	public function evaluations()
	{
		return $this->hasMany(Evaluation::class);
	}

	public function events()
	{
		return $this->hasMany(Event::class);
	}

    # Pour etudiant

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function reclamations()
	{
		return $this->hasMany(Reclamation::class);
	}
}
