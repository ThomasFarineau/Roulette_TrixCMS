<?php

namespace Extensions\Plugins\Roulette_arckene__208645946\App\Models;

use Geeky\Database\CacheQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class RouletteElements extends Model
{
    use CacheQueryBuilder;

    protected $table = 'roulette__elements';
    protected $fillable = ['id', 'element_id', 'type', 'number', 'title', 'color', 'created_at', 'updated_at'];

    public function create(array $attributes = [])
    {
        return parent::create($attributes); // TODO: Change the autogenerated stub
    }

    public static function getId($id)
    {
        return parent::where('id', $id)->first(); // TODO: Change the autogenerated stub
    }
}
