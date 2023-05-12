<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;
    public function __construct() //Supaya adminModel can use all method here
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        $curPage = $this->request->getVar('page_admin_data') ? $this->request->getVar('page_admin_data') : 1;

        $keyW = $this->request->getVar('keyword');
        if ($keyW) {
            $admin = $this->adminModel->searchAdmin($keyW);
        } else {
            $admin = $this->adminModel;
        }

        $data = [
            'title' => 'Daftar Admin | First Project CI',
            // 'admins' => $this->adminModel->getAdmin(),
            'admins' => $admin->paginate(5, 'admin_data'),
            'pager' => $this->adminModel->pager,
            'currentPage' => $curPage

        ];

        return view('admin/index', $data);
    }
}
