<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class KiosController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KiosModel');

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
        $data['title'] = "Kios";
        $data['data'] = parent::model('KiosModel')->get_kios()->result();
        parent::template('kios/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("kios_nama");
            $alamat = parent::post("kios_alamat");
            $cabang = parent::post("kios_cabang");

            $data = array(
                "kios_nama"=>$nama,
                "kios_cabang"=>$cabang,
                "kios_alamat"=>$alamat,
            );
            parent::model("KiosModel")->post_kios($data);
            parent::alert("msg","Berhasil Menambahkan Data !!!");
            redirect("kios");

        }
        else{
            $data['title'] = "Kios";
            parent::template('kios/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(2);
        if(isset($_POST['submit'])){
            $nama = parent::post("kios_nama");
            $alamat = parent::post("kios_alamat");
            $cabang = parent::post("kios_cabang");

            $data = array(
                "kios_nama"=>$nama,
                "kios_cabang"=>$cabang,
                "kios_alamat"=>$alamat,
            );
            parent::model("KiosModel")->editKios($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("kios");
        }
        else{
            $data['title'] = "Kios";
            $param = array('kios_id'=>$id);
            $data['row'] = parent::model("KiosModel")->getOne($param);
            parent::template('kios/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("kios_id");
        $param = array("kios_id"=>$id);
        $isi = parent::model("KiosModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Kios";
        $id = $this->uri->segment(2);
        $data = array("kios_id"=>$id);
        parent::model("KiosModel")->deleteKios($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("kios");
    }
}
