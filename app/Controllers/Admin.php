<?php
namespace App\Controllers;
class Admin extends BaseController
{
protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $this->builder->select('users.id as userid, username, fullname, email, phonenumber, user_image, alamat, name,  mutiara_image, banner_image, sticker_image, jersey_image, sertifikat_image, kunci_image, kartu_image, akrilik_image, mug_image, poster_image, tshirt_image, tumbler_image, whatsapp, facebook, instagram, messenger, youtube, tiktok, github, cod, namapenerima');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();
        return view('admin/index', $data);
    }
        public function orderlist()
        {
            return view('Admin/orderlist');
        }
        public function edit()
        {
            return view('Admin/edit');
        }
        public function print()
        {
            return view('Admin/print');
        }
}
