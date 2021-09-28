<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reclamation
 * 
 * @property int $user_id
 * @property int $evaluation_id
 * @property string $motif
 * 
 * @property Evaluation $evaluation
 * @property User $user
 *
 * @package App\Models
 */
class Reclamation extends Model
{
	protected $table = 'reclamations';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'evaluation_id' => 'int'
	];

	protected $fillable = [
		'motif', 'user_id','evaluation_id'
	];

	public function evaluation()
	{
		return $this->belongsTo(Evaluation::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
