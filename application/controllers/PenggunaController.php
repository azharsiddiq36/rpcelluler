<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class PenggunaController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel');

        if (parent::hasLogin())
        {
            redirect(site_url('login'));
        }
    }
    public function index(){
        $data['title'] = 'Dashboard';
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Daftar Pengguna";
        $data['data'] = parent::model('PenggunaModel')->get_pengguna()->result();
        parent::template('pengguna/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){

        }
        else{
            $data['title'] = "Pengguna";
            parent::template('pengguna/tambah_pengguna',$data);
        }
    }
}
