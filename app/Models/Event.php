<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 *
 * @property int $id
 * @property string $libelle
 * @property string|null $description
 * @property Carbon $date_activite
 * @property string $image
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'events';
	public $timestamps = false;

	protected $dates = [
		'date_activite'
	];

	protected $fillable = [
		'libelle',
		'description',
		'date_activite',
		'image',
        'categorie'
	];
}
