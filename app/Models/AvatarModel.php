<?php

namespace App\Models;

use CodeIgniter\Model;

class AvatarModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'avatar'
    ];

    protected $useTimestamps = false;
}
