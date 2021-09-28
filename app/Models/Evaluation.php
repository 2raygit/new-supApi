<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 * 
 * @property int $id
 * @property Carbon $date_evaluation
 * @property string $libelle
 * @property string $type
 * @property int $matiere_id
 * @property int $user_id
 * 
 * @property Matiere $matiere
 * @property User $user
 * @property Collection|Note[] $notes
 * @property Collection|Reclamation[] $reclamations
 *
 * @package App\Models
 */
class Evaluation extends Model
{
	protected $table = 'evaluations';
	public $timestamps = false;

	protected $casts = [
		'matiere_id' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'date_evaluation'
	];

	protected $fillable = [
		'date_evaluation',
		'libelle',
		'type',
		'matiere_id',
		'user_id'
	];

	public function matiere()
	{
		return $this->belongsTo(Matiere::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function notes()
	{
		return $this->hasMany(Note::class);
	}

	public function reclamations()
	{
		return $this->hasMany(Reclamation::class);
	}
}
