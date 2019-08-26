<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $proveedor
 * @property string $laboratorio
 * @property string $stock
 * @property string $created_at
 * @property string $updated_at
 */
class Medicamentos extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'proveedor', 'laboratorio', 'stock', 'created_at', 'updated_at'];

}
