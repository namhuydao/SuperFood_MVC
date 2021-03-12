<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class Permissions extends Model {
    protected $guarded = [];
    protected $table = "permissions";
    public function roles()
    {
        return $this->belongsToMany(Role::class,'link_role_permission');
    }
}