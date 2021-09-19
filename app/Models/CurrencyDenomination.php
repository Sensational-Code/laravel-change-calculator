<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyDenomination extends Model
{
		/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'denominations';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      'denominations' => 'array',
    ];
}
