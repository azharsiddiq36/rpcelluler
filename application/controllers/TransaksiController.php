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
        $this->load->model('PaketModel');
        $this->load->model('ProviderModel');
        $this->load->model('KiosModel');

    }
    public function index(){
        $data['title'] = 'Dashboard';
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Transaksi";
        $sort = $this->uri->segment(2);
        $type = $this->uri->segment(3);
        $data['select'] = null;
        if (isset($_POST['submit'])){
            $kios = parent::post('kios');
            $data['select'] = $kios;
            $data['kios_param'] = null;
            $data['transaksi_param'] = null;
        }
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

        $data['kios'] = parent::model('KiosModel')->get_kios()->result();
        parent::template('transaksi/index',$data);
    }
    public function tambahdebit(){

            if(isset($_POST['submit'])){

                $id = parent::post("paket_provider_id");
                $param = array("paket_id"=>$id);
                $paket = parent::model("PaketModel")->getOne($param);
                $namapaket = parent::post("nama");
                $providerpaket = parent::post("providerpaket");
                $jumlah = parent::post("jumlah");
                $jenis = parent::post("jenis");
                $total = $jumlah*$paket['paket_harga_satuan'];
                $kios = parent::post("kios");
                $pengguna = $this->session->userdata['pengguna_id'];
                $stok = $paket['paket_stok']-$jumlah;
                $data = array("paket_stok"=>$stok);
                parent::model("PaketModel")->editPaket($id,$data);
                $data = array(
                    "transaksi_keterangan"=>$providerpaket." - ".$namapaket,
                    "transaksi_jumlah"=>$jumlah,
                    "transaksi_total"=>$total,
                    "transaksi_pilihan"=>$jenis,
                    "transaksi_paket_id"=>$id,
                    "transaksi_jenis"=>'debit',
                    "transaksi_kios_id"=>$kios,
                    "transaksi_pengguna_id"=>$pengguna
                );
                parent::model("TransaksiModel")->post_transaksi($data);
                parent::alert("msg","Berhasil Menambahkan Debit !!!");
                redirect("karyawan/debit");

            }
            else{
                $data['title'] = "Laporan Debit";
                $data['kios'] =  parent::model("KiosModel")->get_kios()->result();
                $data['data'] = $this->PaketModel->getJoin()->result();
                parent::template('transaksi/tambahdebit',$data);
            }


    }
    public function tambahkredit(){

        if(isset($_POST['submit'])){
            $jumlah = parent::post("jumlah");
            $jenis = parent::post("jenis");
            $kios = parent::post("kios");
            $pengguna = $this->session->userdata['pengguna_id'];
            $keterangan = parent::post("keterangan");
            $data = array(
                "transaksi_keterangan"=>$keterangan,
                "transaksi_jumlah"=>1,
                "transaksi_total"=>$jumlah,
                "transaksi_pilihan"=>$jenis,
                "transaksi_paket_id"=>4,
                "transaksi_jenis"=>'kredit',
                "transaksi_kios_id"=>$kios,
                "transaksi_pengguna_id"=>$pengguna
            );
            parent::model("TransaksiModel")->post_transaksi($data);
            parent::alert("msg","Berhasil Menambahkan Kredit !!!");
            redirect("karyawan/kredit");

        }
        else{
            $data['title'] = "Laporan Kredit";
            $data['kios'] =  parent::model("KiosModel")->get_kios()->result();
            parent::template('transaksi/tambahkredit',$data);
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
    public function detail(){
        $id = parent::post("paket_id");
        $isi = parent::model("PaketModel")->getOneJoin($id)->row_array();
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
    public function riwayat(){
        $data['title'] = "Riwayat";
        $id = $this->session->userdata['pengguna_id'];
//        $data['data']=$this->TransaksiModel->getAllJoin()->result();
        $data['data']=$this->TransaksiModel->getByUser($id)->result();
//        $data['data']=$this->TransaksiModel->getByUser($id)->result();
        $data['kios'] = parent::model('KiosModel')->get_kios()->result();

        parent::template('transaksi/riwayat',$data);
    }
    public function cetak(){
        $data['title'] = "Riwayat";
        $id = $this->session->userdata['pengguna_id'];
        if(isset($_POST['submit'])){
            $tglmulai = parent::post('mulai');
            $tglselesai = parent::post('selesai');
            $kios = parent::post('kios');
            $transaksi = parent::post('transaksi');
            if ($tglmulai==$tglselesai){
                $data['data'] = $this->TransaksiModel->getNowJoin($tglmulai)->result();
            }
            else{
                $data['data'] = $this->TransaksiModel->getAllJoinDate($tglmulai,$tglselesai)->result();
            }
            $data['kios_param'] = $kios;
            $data['transaksi_param'] = $transaksi;
            $data['kios'] = parent::model('KiosModel')->get_kios()->result();
            parent::template('transaksi/cetakmasuk',$data);
        }
        else{
            $data['kios_param'] = null;
            $data['transaksi_param'] = null;
            $data['kios'] = parent::model('KiosModel')->get_kios()->result();
            $data['data']=$this->TransaksiModel->getAllJoin()->result();
            parent::template('transaksi/cetakmasuk',$data);
        }

    }
}
