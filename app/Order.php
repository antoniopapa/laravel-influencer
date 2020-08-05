<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $total
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\OrderItem[] $orderItems
 * @property-read int|null $order_items_count
 * @property-read mixed $name
 * @property string $code
 * @property int $user_id
 * @property string $influencer_email
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $city
 * @property string|null $country
 * @property string|null $zip
 * @property int $complete
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereInfluencerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereZip($value)
 * @property string $transaction_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereTransactionId($value)
 * @property-read mixed $admin_total
 * @property-read mixed $influencer_total
 */
class Order extends Model
{
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getAdminTotalAttribute()
    {
        return $this->orderItems->sum(function (OrderItem $item) {
            return $item->admin_revenue;
        });
    }

    public function getInfluencerTotalAttribute()
    {
        return $this->orderItems->sum(function (OrderItem $item) {
            return $item->influencer_revenue;
        });
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
