<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'color_id',
        'collection_id'
    ];

    /**
     * Get the color.
     */
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    /**
     * Get the collection.
     */
    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
