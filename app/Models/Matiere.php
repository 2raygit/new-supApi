<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property int $id
 * @property string $libelle
 * 
 * @property Collection|Evaluation[] $evaluations
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matieres';
	public $timestamps = false;

	protected $fillable = [
		'libelle'
	];

	public function evaluations()
	{
		return $this->hasMany(Evaluation::class);
	}
}
