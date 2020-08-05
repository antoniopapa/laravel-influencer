<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\LinkProduct
 *
 * @property int $id
 * @property int $link_id
 * @property int $product_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct whereLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\LinkProduct whereProductId($value)
 * @mixin \Eloquent
 */
class LinkProduct extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;
}
