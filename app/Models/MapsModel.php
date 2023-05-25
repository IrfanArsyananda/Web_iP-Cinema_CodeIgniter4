<?php

namespace App\Models;

use CodeIgniter\Model;

class MapsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'province_data';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'province_id', 'province_name', 'province_altname', 'province_latitude', 'province_longitude'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getRegencies()
    {
        return $this->findAll();
    }
    public function getRegenciesCustom()
    {
        $query = $this->db->query("SELECT * FROM regency_list ORDER BY id ASC");
        return $query->getResultArray();
    }
}
