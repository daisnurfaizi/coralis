<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AvatarModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;

class AvatarController extends BaseController
{
    protected $request;

    // public function __construct(RequestInterface $request)
    // {
    //     $this->request = $request;
    // }
    public function index()
    {
    }
    public function do_upload()
    {
        // var_dump($_POST);
        // var_dump($_FILES);
        $this->validate([
            'avatar' => 'uploaded[avatar]|max_size[avatar,1024]'
                . '|mime_in[avatar,image/png,image/jpg]'
                . '|ext_in[avatar,png,jpg]'
        ]);


        if (!$this->validate([])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('Dashboard')->withInput()->with('validation', $validation);
            // return redirect()->to('Dashboard')->withInput();
            $avatar = $this->request->getFile('avatar');
            $getrandomname = $avatar->getRandomName();
            $avatar->move('img', $getrandomname);
            $avatarname = $avatar->getName();
            // dd($this->request->getVar('iduser'));
            $iduser = $this->request->getVar('iduser');
            $avatarmodel = new AvatarModel();
            $updateavatar = $avatarmodel->where('id', $iduser)->first();
            // dd($updateavatar);
            if (isset($updateavatar)) {
                $avatarmodel->update($iduser, [
                    'avatar' => $getrandomname
                ]);
                return redirect()->to('Dashboard')->withInput();
            }
        }
    }
}
