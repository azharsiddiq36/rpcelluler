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
        $this->load->model('KiosModel');
        $this->load->model('PaketModel');
        $this->load->model('ProviderModel');
        $this->load->model('TransaksiModel');
        if ($this->session->userdata['pengguna_id'] == null){
            redirect('login');
        }
    }
    public function index(){
        $data['title'] = 'Dashboard';
        $data['pengguna'] = parent::model('PenggunaModel')->get_pengguna()->num_rows();
        $data['provider'] = parent::model('ProviderModel')->get_provider()->num_rows();
        $data['paket'] = parent::model('PaketModel')->get_paket()->num_rows();
        $data['kios'] = parent::model('KiosModel')->get_kios()->num_rows();
        $date = date('Y-m-d');
        $data['sekarang'] = $this->TransaksiModel->getNowJoin($date)->num_rows();
        $date = date('m');
        $data['bulan'] = $this->TransaksiModel->getMonthJoin($date)->num_rows();
        $date = date('Y');
        $data['tahun'] = $this->TransaksiModel->getYearsJoin($date)->num_rows();
        $data['semua'] = parent::model('PenggunaModel')->get_pengguna()->num_rows();
        switch ($this->session->userdata['pengguna_hak_akses']){
            case "ketua":
                parent::template('dashboard/indexketua',$data);break;
            case "karyawan":                  parent::template('dashboard/indexkaryawan',$data);break;
            default :        parent::template('dashboard/index',$data);
        }
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
            $data = array("pengguna_email"=>$email);
            if (parent::model("PenggunaModel")->checkMail($data)->num_rows()<1){
                $data = array(
                    "pengguna_status"=>"nonaktif",
                    "pengguna_foto"=>"user.png",
                    "pengguna_nama"=>$nama,
                    "pengguna_password"=>md5($password),
                    "pengguna_email" =>$email,
                    "pengguna_nomor" => $nomor,
                    "pengguna_alamat" =>$alamat,
                    "pengguna_hak_akses" =>$hak_akses,
                    "pengguna_jk"=>$jk
                );
                parent::model("PenggunaModel")->post_pengguna($data);
                parent::alert("msg","Berhasil Menambahkan Data !!!");
                redirect("pengguna");
            }
            else{
                $data['title'] = "Pengguna";
                parent::alert("msg","Email Telah Tedaftar !!!");
                parent::template('pengguna/tambah_pengguna',$data);
            }
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
            parent::alert("msg","Berhasil Memperbarui Data !!!");
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
        $id = parent::post("pengguna_id");

        $param = array("pengguna_id"=>$id);
        $isi = parent::model("PenggunaModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Pengguna";
        $id = $this->uri->segment(2);
        $data = array("pengguna_id"=>$id);
        parent::model("PenggunaModel")->deletePengguna($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("pengguna");
    }
}
