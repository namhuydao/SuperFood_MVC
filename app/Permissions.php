<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Contracts\Permission;

class Permissions extends Model implements Permission {
    protected $guarded = [];
    protected $table = "permissions";


    public static function findByName(string $name, $guardName): Permission
    {
        // TODO: Implement findByName() method.
    }

    public static function findById(int $id, $guardName): Permission
    {
        // TODO: Implement findById() method.
    }

    public static function findOrCreate(string $name, $guardName): Permission
    {
        // TODO: Implement findOrCreate() method.
    }

    public function roles(): BelongsToMany
    {
        // TODO: Implement roles() method.
    }
}