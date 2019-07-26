<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class TransaksiController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TransaksiModel');

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
        $data['title'] = "Transaksi";
        $sort = $this->uri->segment(2);
        $type = $this->uri->segment(3);
        $data['data'] = null;
        switch ($sort){
            case 'sekarang':
                $date = date('Y-m-d');
                $data['data'] =$this->TransaksiModel->getNowJoin($date)->result();break;
            case 'tahun':
                $date = date('Y');
                $data['data'] =$this->TransaksiModel->getYearsJoin($date)->result();break;
            case 'bulan':
                $date = date('m');
                $data['data'] =$this->TransaksiModel->getMonthJoin($date)->result();break;
            default:$data['data'] = parent::model('TransaksiModel')->getAllJoin()->result();break;
        }

        parent::template('transaksi/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("transaksi_nama");
            $alamat = parent::post("transaksi_alamat");
            $cabang = parent::post("transaksi_cabang");

            $data = array(
                "transaksi_nama"=>$nama,
                "transaksi_cabang"=>$cabang,
                "transaksi_alamat"=>$alamat,
            );
            parent::model("TransaksiModel")->post_transaksi($data);
            parent::alert("msg","Berhasil Menambahkan Data !!!");
            redirect("transaksi");

        }
        else{
            $data['title'] = "Transaksi";
            parent::template('transaksi/tambah',$data);
        }
    }
    public function edit(){
        $id = $this->uri->segment(2);
        if(isset($_POST['submit'])){
            $nama = parent::post("transaksi_nama");
            $alamat = parent::post("transaksi_alamat");
            $cabang = parent::post("transaksi_cabang");

            $data = array(
                "transaksi_nama"=>$nama,
                "transaksi_cabang"=>$cabang,
                "transaksi_alamat"=>$alamat,
            );
            parent::model("TransaksiModel")->editTransaksi($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("transaksi");
        }
        else{
            $data['title'] = "Transaksi";
            $param = array('transaksi_id'=>$id);
            $data['row'] = parent::model("TransaksiModel")->getOne($param);
            parent::template('transaksi/edit',$data);
        }
    }
    public function listTransaksi(){
        $sort = $this->uri->segment(2);
    }
    public function detail(){
        $id = parent::post("transaksi_id");
        $param = array("transaksi_id"=>$id);
        $isi = parent::model("TransaksiModel")->getOne($param);
        echo json_encode($isi);
    }
    public function delete(){
        $data['title'] = "Transaksi";
        $id = $this->uri->segment(2);
        $data = array("transaksi_id"=>$id);
        parent::model("TransaksiModel")->deleteTransaksi($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("transaksi");
    }
}
