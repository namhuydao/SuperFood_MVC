<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Users extends Model {
    protected $guarded = [];
    protected $table = "users";
    use HasRoles;

}