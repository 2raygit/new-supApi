<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * 
 * @property int $user_id
 * @property int $evaluation_id
 * @property int $valeur
 * 
 * @property Evaluation $evaluation
 * @property User $user
 *
 * @package App\Models
 */
class Note extends Model
{
	protected $table = 'notes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'evaluation_id' => 'int',
		'valeur' => 'int'
	];

	protected $fillable = [
		'valeur'
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
