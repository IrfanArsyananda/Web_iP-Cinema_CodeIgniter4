<?php

namespace App\Models;

use CodeIgniter\Model;

class MapsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'maps_geo';
    protected $primaryKey       = 'nid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nid', 'parent_nid', 'name', 'serial', 'type', 'latitude', 'longitude', 'status'];

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
        $query = $this->db->query("SELECT * FROM `maps_geo` WHERE `type`='2' ORDER BY `nid` ASC");
        return $query->getResultArray();
    }
}
