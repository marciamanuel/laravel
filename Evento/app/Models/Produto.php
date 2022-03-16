<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 *
 * @property $id
 * @property $Produto
 * @property $Descrição
 * @property $Preço
 * @property $Stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produto extends Model
{
    
    static $rules = [
		'Produto' => 'required',
		'Descrição' => 'required',
		'Preço' => 'required',
		'Stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Produto','Descrição','Preço','Stock'];



}
