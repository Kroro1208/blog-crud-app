<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    // protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'small_description',
        'original_price',
        'price',
        'stock',
        'is_active'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'datetime:Y-m-d',
        'is_active' => 'boolean'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $appends = [
        'name_price'
    ];

    public function getNamePriceAttribute()
    {
        return $this->name . '-' . $this->price;
    }

    // Accessors
    public function getNameAttribute()
    {
        // uc(upper case) name 属性を取得する際に、最初の文字を大文字に変換
        return ucfirst($this->attributes['name']);
    }

    // Mutators
    public function setNameAttribute($value)
    {
        // name 属性を設定する際に、その値をすべて大文字に変換
        $this->attributes['name'] = strtoupper($value);
        // 与えられた文字列をURLフレンドリーなスラッグ形式に変換
        $this->attributes['slug'] = Str::slug($value);
    }
}
