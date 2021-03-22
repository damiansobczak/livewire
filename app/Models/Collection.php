<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get all materials that owns the collection.
     */
    public function material()
    {
        return $this->hasMany(Material::class);
    }

    /**
     * Get all materials that owns the collection.
     */
    public function collection()
    {
        return $this->hasMany(Collection::class);
    }
}
