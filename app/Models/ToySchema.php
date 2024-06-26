<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToySchema extends Model
{
    use HasFactory;

    protected $tablename = "toy_schema";
    protected $primaryKey = "toy_schema_id";
}
