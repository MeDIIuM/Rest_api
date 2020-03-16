<?php

namespace App;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Client
 *
 * @mixin Eloquent
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @property int $id
 * @property int $client_id
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $house
 * @property string $postcode
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereStreet($value)
 */
class Address extends Model
{
    protected $table = 'address';

    protected $fillable = ['id', 'client_id', 'region', 'city', 'street', 'house', 'postcode'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
