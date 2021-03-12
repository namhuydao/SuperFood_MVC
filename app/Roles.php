<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Roles extends Model {
    protected $guarded = [];
    protected $table = "roles";

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'link_role_permission');
    }
}