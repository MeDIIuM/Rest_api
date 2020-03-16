<?php

namespace App;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Address;
/**
 * Client
 *
 * @mixin Eloquent
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property int $accept
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Address[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Client whereSurname($value)
 */
class Client extends Model
{


protected $table = 'clients';

    public function addresses()
    {
        return $this->hasMany('App\Address', 'client_id');
    }

    protected $fillable = ['id', 'name', 'surname', 'accept'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
