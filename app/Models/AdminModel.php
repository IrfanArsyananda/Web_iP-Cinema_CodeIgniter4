<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin_data';
    protected $primaryKey = 'admin_id';

    protected $allowedFields = ['admin_username', 'admin_password', 'admin_avatar'];

    protected $useTimestamps = true;

    public function getAdmin($name = false)
    {
        if ($name == false) {
            return $this->findAll();
        }
        return $this->where(['admin_username' => $name])->first();
    }

    public function searchAdmin($k = false)
    {
        return $this->table('admin_data')->like('admin_username', $k);
    }
}
