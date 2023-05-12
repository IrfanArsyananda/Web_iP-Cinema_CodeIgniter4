<?php

namespace App\Models;

use CodeIgniter\Model;

class MoviesModel extends Model
{
    protected $table      = 'movies';
    protected $primaryKey = 'id_movie';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['title_movie', 'slug_movie', 'year_movie', 'synopsis_movie', 'cover_movie'];

    // // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    public function getMovies($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug_movie' => $slug])->first();
    }
    public function getNameCover($id)
    {
        $resultNameCov = $this->find($id);
        return $resultNameCov['cover_movie'];
    }
}
