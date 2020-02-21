<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * @package App\Models
 * @property int                 $id
 * @property string              $name
 * @property string              $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class Event extends Model
{
    /** @var int */
    const STATUS_PENDING = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_ARCHIVED = 2;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
    ];

}
