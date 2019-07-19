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
        $data['title'] = "Pengguna";
        $data['data'] = parent::model('PenggunaModel')->get_pengguna()->result();
        parent::template('pengguna/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("pengguna_nama");
            $password = parent::post("pengguna_password");
            $jk = parent::post("jk");
            $email = parent::post("pengguna_email");
            $hak_akses = parent::post("pengguna_hak_akses");
            $alamat = parent::post("pengguna_alamat");
            $nomor = parent::post("pengguna_nomor");
            $data = array(
                "pengguna_status"=>"nonaktif",
                "pengguna_foto"=>"user.png",
                "pengguna_nama"=>$nama,
                "pengguna_password"=>$password,
                "pengguna_email" =>$email,
                "pengguna_nomor" => $nomor,
                "pengguna_alamat" =>$alamat,
                "pengguna_hak_akses" =>$hak_akses,
                "pengguna_jk"=>$jk
            );
            parent::model("PenggunaModel")->post_pengguna($data);
            redirect("pengguna");
        }
        else{
            $data['title'] = "Pengguna";
            parent::template('pengguna/tambah_pengguna',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(2);
        if(isset($_POST['submit'])){
            $nama = parent::post("pengguna_nama");
            $jk = parent::post("jk");
            $email = parent::post("pengguna_email");
            $hak_akses = parent::post("pengguna_hak_akses");
            $alamat = parent::post("pengguna_alamat");
            $nomor = parent::post("pengguna_nomor");
            $data = array(
                "pengguna_nama"=>$nama,
                "pengguna_email" =>$email,
                "pengguna_nomor" => $nomor,
                "pengguna_alamat" =>$alamat,
                "pengguna_hak_akses" =>$hak_akses,
                "pengguna_jk"=>$jk
            );
            parent::model("PenggunaModel")->editPengguna($id,$data);
            redirect("pengguna");
        }
        else{
            $data['title'] = "Pengguna";
            $param = array('pengguna_id'=>$id);
            $data['akses'] = array("administrator","ketua","karyawan");
            $data['row'] = parent::model("PenggunaModel")->getOne($param);
            parent::template('pengguna/edit_pengguna',$data);
        }
    }
    public function detail(){
        $data['title'] = "Pengguna";
    }
    public function delete(){
        $data['title'] = "Pengguna";
        $id = $this->uri->segment(2);
        $data = array("pengguna_id"=>$id);
        parent::model("PenggunaModel")->deletePengguna($data);
        redirect("pengguna");
    }
}
