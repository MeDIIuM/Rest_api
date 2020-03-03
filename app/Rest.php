<?php

namespace App;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Address;
/**
 * Rest
 *
 * @mixin Eloquent
 * @method static Builder|Rest newModelQuery()
 * @method static Builder|Rest newQuery()
 * @method static Builder|Rest query()
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property int $accept
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Address[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rest whereAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Rest whereSurname($value)
 */
class Rest extends Model
{


protected $table = 'Rest';

    public function addresses()
    {
        return $this->hasMany('App\Address', 'rest_id');
    }

    protected $fillable = ['id', 'name', 'surname', 'accept'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

}
