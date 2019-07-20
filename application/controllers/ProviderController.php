<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class ProviderController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProviderModel');

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
        $data['title'] = "Provider";
        $data['data'] = parent::model('ProviderModel')->get_provider()->result();
        parent::template('provider/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("provider_nama");
            $data = array(
                "provider_nama"=>$nama
            );
            parent::model("ProviderModel")->post_provider($data);
            parent::alert("msg","Berhasil Menambahkan Data !!!");
            redirect("provider");

        }
        else{
            $data['title'] = "Provider";
            parent::template('provider/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(2);
        if(isset($_POST['submit'])){
            $nama = parent::post("provider_nama");
            $data = array(
                "provider_nama"=>$nama,
            );
            parent::model("ProviderModel")->editProvider($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("provider");
        }
        else{
            $data['title'] = "Provider";
            $param = array('provider_id'=>$id);
            $data['row'] = parent::model("ProviderModel")->getOne($param);
            parent::template('provider/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("provider_id");

        $param = array("provider_id"=>$id);
        $isi = parent::model("ProviderModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Provider";
        $id = $this->uri->segment(2);
        $data = array("provider_id"=>$id);
        parent::model("ProviderModel")->deleteProvider($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("provider");
    }
}
