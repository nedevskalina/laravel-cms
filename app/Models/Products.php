<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'quantity',
        'user_id',
        'cat_id',
        'image',
    ];


    public function categories()
    {
        $this->belongsTo(Categories::class,'cat_id');
    }


    public function users()
    {
        $this->belongsTo(User::class,'user_id');

    }



    public static function getList()
    {
        $categories = self::all();
        $lists = '';
        foreach ($categories as $category) {
            if ($category->parent_id === null) {
                $lists .= self::renderOption($category);
            }
        }
        return $lists;
    }

    private static function dash($depth)
    {
        $dash = '';
        for ($i = 1; $i <= $depth; $i++) {
            $dash .= ' - ';
        }
        return $dash;
    }

}
