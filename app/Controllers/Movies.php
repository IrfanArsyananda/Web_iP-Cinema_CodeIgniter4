<?php

namespace App\Controllers;

use App\Models\MoviesModel;

class Movies extends BaseController
{
    //----------Constract agar model movies bisa dipakai di file controller ini----------------------
    // protected $moviesModel;
    // public function __construct()
    // {
    //     $this->moviesModel = new MoviesModel();
    // }
    //-----------------------------------------------------------------------------------------------

    public function index()
    {
        // echo "Controller Pages Method Index";

        //----- Sudah diubah ke getMovies -----
        $moviesModel = new MoviesModel();
        // $movies = $moviesModel->findAll();
        //-------------------------------------

        // ------------------------------------ Konek DB tanpa model------------------------------------ 
        // $db = \Config\Database::connect();
        // $movies = $db->query("SELECT * FROM `movies` WHERE `id_movie` = 2 ");
        // foreach ($movies->getResultObject() as $row) {
        //     echo json_encode($row);
        // }
        // die();
        //-----------------------------------------------------------------------------------------------

        $data = [
            'title' => 'Daftar Film | First Project CI',
            'movies' => $moviesModel->getMovies()
        ];

        // dd($moviesModel->getMovies());

        return view('movies/index', $data);
    }

    public function detailMovie($slugMov)
    {
        $moviesModel = new MoviesModel();

        $data = [
            'title' => 'Detail Film | First Project CI',
            'movies' => $moviesModel->getMovies($slugMov)
        ];
        // dd($data);
        if (empty($data['movies'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul fim ' . $slugMov . ' tidak ditemukan!');
        }
        return view('movies/detail', $data);
        // echo "Controller Movies Method detail ($slugMov)";
    }

    public function createMovie()
    {
        $getValMsg = session()->get('valMsg');
        if ($getValMsg == null) : $getValMsg = false;
        endif;
        $data = [
            'title' => 'Tambah Film | First Project CI',
            'valMsg' =>  $getValMsg, //\Config\Services::validation()
        ];
        // dd($data);
        return view('movies/create', $data);
        // echo "Controller Movies Method addMovies";
    }

    public function save()
    {
        $moviesModel = new MoviesModel();

        if (!$this->validate([
            // 'coverMov' => [
            //     'rules' => 'max_size[coverMov,1024]|is_image[coverMov]|mime_in[coverMov,image/jpg,image/jpeg,image/png]',
            //     'errors' => [
            //         'max_size' => 'Ukuran maksimal file adalah 1MB!',
            //         'is_image' => 'File yang anda pilih bukan gambar!',
            //         'mime_in' => 'File yang anda pilih bukan gambar!'
            //     ]
            // ],
            'titleMov' => [
                'rules' => 'required|is_unique[movies.title_movie]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul ' . $this->request->getVar('titleMov') . ' telah terdaftar'
                ]
            ],
            'yearMov' => [
                'rules' => 'required|exact_length[4]',
                'errors' => [
                    'required' => 'Tahun harus diisi',
                    'exact_length' => 'Tahun harus 4 digit'
                ]
            ],
        ])) {
            $valMsg = \Config\Services::validation();
            // dd($valMsg);
            return redirect()->to('/movies-add')->withInput()->with('valMsg', $valMsg);
        }

        $fileCover = $this->request->getFile('coverMov');
        if ($fileCover->getError() == 4) {
            $namaCover = 'default-movie-cover.png';
        } else {
            $namaCover = $fileCover->getRandomName();
            $fileCover->move('img', $namaCover);
        }

        $slugMo = url_title($this->request->getVar('titleMov'), '-', true);
        $moviesModel->save(
            [
                'title_movie' => $this->request->getVar('titleMov'),
                'slug_movie' => $slugMo,
                'year_movie' => $this->request->getVar('yearMov'),
                'synopsis_movie' => $this->request->getVar('synopsisMov'),
                'cover_movie' => $namaCover
            ]
        );
        session()->setFlashdata('msg', 'Film ' . $this->request->getVar('titleMov') . ' berhasil ditambahkan!');
        return redirect()->to('/movies');
    }

    public function deleteMovie($id)
    {
        $moviesModel = new MoviesModel();
        $fileCovDel = $moviesModel->getNameCover($id);
        if ($fileCovDel != "default-movie-cover.png") {
            unlink('img/' . $fileCovDel);
        }
        $moviesModel->delete($id);
        session()->setFlashdata('msg', 'Data berhasil dihapus!');
        return redirect()->to('/movies');
        // echo "Controller Movies Method deleteMovies - $id";
    }

    public function updateMovie($slug)
    {
        $moviesModel = new MoviesModel();

        $getValMsg = session()->get('valMsg');
        if ($getValMsg == null) : $getValMsg = false;
        endif;
        $data = [
            'title' => 'Ubah Film | First Project CI',
            'valMsg' =>  $getValMsg, //\Config\Services::validation(),
            'movies' => $moviesModel->getMovies($slug)
        ];
        // dd($data);
        return view('movies/update', $data);
        // echo "Controller Movies Method editMovie";
    }
    public function update($id)
    {
        $moviesModel = new MoviesModel();
        $titleMovieOld = $moviesModel->getMovies($this->request->getVar('slugMov'));
        if ($titleMovieOld['title_movie'] == $this->request->getVar('titleMov')) {
            $rule_title = 'required';
        } else {
            $rule_title = 'required|is_unique[movies.title_movie]';
        }

        if (!$this->validate([
            'titleMov' => [
                'rules' => $rule_title,
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul ' . $this->request->getVar('titleMov') . ' telah terdaftar'
                ]
            ],
            'yearMov' => [
                'rules' => 'required|exact_length[4]',
                'errors' => [
                    'required' => 'Tahun harus diisi',
                    'exact_length' => 'Tahun harus 4 digit'
                ]
            ],
        ])) {
            $valMsg = \Config\Services::validation();
            return redirect()->to('/movies-edit/' . $this->request->getVar('slugMov'))->withInput()->with('valMsg', $valMsg);
        }

        $fileCover = $this->request->getFile('coverMov');
        $namaCoverOld = $this->request->getVar('coverMovOld');
        if ($fileCover->getError() == 4) {
            $namaCover = $namaCoverOld;
        } else {
            $namaCover = $fileCover->getRandomName();
            $fileCover->move('img', $namaCover);
            if ($namaCoverOld != "default-movie-cover.png") {
                unlink('img/' . $namaCoverOld);
            }
        }

        // dd($this->request->getVar());
        $slugMo = url_title($this->request->getVar('titleMov'), '-', true);
        $moviesModel->save(
            [
                'id_movie' => $id,
                'title_movie' => $this->request->getVar('titleMov'),
                'slug_movie' => $slugMo,
                'year_movie' => $this->request->getVar('yearMov'),
                'synopsis_movie' => $this->request->getVar('synopsisMov'),
                'cover_movie' => $namaCover
            ]
        );
        session()->setFlashdata('msg', 'Film ' . $this->request->getVar('titleMov') . ' berhasil diubah!');
        return redirect()->to('/movies');
    }
}
