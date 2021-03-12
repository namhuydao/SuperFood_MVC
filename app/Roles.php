<?php
namespace App;
use Spatie\Permission\Models\Role;

class Roles extends Role {
    protected $guarded = [];
    protected $table = "roles";
}