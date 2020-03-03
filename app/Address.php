<?php

namespace App;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Rest
 *
 * @mixin Eloquent
 * @method static Builder|Rest newModelQuery()
 * @method static Builder|Rest newQuery()
 * @method static Builder|Rest query()
 * @property int $id
 * @property int $rest_id
 * @property string $region
 * @property string $nas_punkt
 * @property string $street
 * @property string $house
 * @property string $index
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereNasPunkt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereRestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Address whereStreet($value)
 */
class Address extends Model
{
    protected $table = 'Address';

    protected $fillable = ['id', 'rest_id', 'region', 'nas_punkt', 'street', 'house', 'index'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
