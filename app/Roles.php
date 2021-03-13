<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Contracts\Role;

class Roles extends Model implements Role{
    protected $guarded = [];
    protected $table = "roles";

    public function permissions(): BelongsToMany
    {
        // TODO: Implement permissions() method.
    }

    public static function findByName(string $name, $guardName): Role
    {
        // TODO: Implement findByName() method.
    }

    public static function findById(int $id, $guardName): Role
    {
        // TODO: Implement findById() method.
    }

    public static function findOrCreate(string $name, $guardName): Role
    {
        // TODO: Implement findOrCreate() method.
    }

    public function hasPermissionTo($permission): bool
    {
        // TODO: Implement hasPermissionTo() method.
    }
}