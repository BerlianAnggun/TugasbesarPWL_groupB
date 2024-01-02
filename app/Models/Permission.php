<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Spatie\Permission\Models\Role as ModelsPermission;

class Role extends ModelsPermission
{
    use HasFactory;
}