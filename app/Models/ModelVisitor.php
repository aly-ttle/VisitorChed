<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\VisitorFactory;

class ModelVisitor extends Model
{
    use HasFactory;

      protected $table = 'visitors'; 

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return VisitorFactory::new();
    }
}