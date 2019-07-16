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
        $this->load->model('AuthModel');

        if (parent::hasLogin())
        {
            redirect(site_url('login'));
        }
    }
    public function index(){
        $data['title'] = 'Berkas SIMRP';
        $data['page_title'] = '';
        $data['menu'] = '';
        parent::template('dashboard/index',$data);
    }
}