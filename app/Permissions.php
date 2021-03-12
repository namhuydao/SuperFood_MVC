<?php
namespace App;
use Spatie\Permission\Models\Permission;

class Permissions extends Permission {
    protected $guarded = [];
    protected $table = "permissions";

}