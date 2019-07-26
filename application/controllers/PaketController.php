<?php
/**
 * Created by PhpStorm.
 * User: azhar
 * Date: 16/07/19
 * Time: 20:24
 */

class PaketController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketModel');
        $this->load->model('ProviderModel');
        $this->load->model('TransaksiModel');
        if ($this->session->userdata['pengguna_id'] == null){
            redirect('login');
        }
    }
    public function index(){
        $data['title'] = 'Dashboard';
        parent::template('dashboard/index',$data);
    }
    public function daftar(){
        $data['title'] = "Paket";
        $data['data'] = $this->PaketModel->getJoin()->result();
        parent::template('paket/index',$data);
    }
    public function tambah(){
        if(isset($_POST['submit'])){
            $nama = parent::post("paket_nama");
            $provider = parent::post("paket_provider_id");
            $stok = parent::post("paket_stok");
            $satuan = parent::post("paket_harga_satuan");

            $data = array(
                "paket_nama"=>$nama,
                "paket_provider_id"=>$provider,
                "paket_stok"=>$stok,
                "paket_harga_satuan"=>$satuan,
            );
            parent::model("PaketModel")->post_paket($data);
            parent::alert("msg","Berhasil Menambahkan Data !!!");
            redirect("paket");

        }
        else{
            $data['title'] = "Paket";
            $data['provider'] = parent::model('ProviderModel')->get_provider()->result();
            parent::template('paket/tambah',$data);
        }
    }
    public function update_stok(){
        $id = parent::post("paket_provider_id");
        $stok = parent::post("stok");
        $param = array("paket_id"=>$id);
        $paket = parent::model("PaketModel")->getOne($param);
        $jumlah = $stok-$paket['paket_stok'];
        $total = $jumlah*$paket['paket_harga_satuan'];
        $jenis = 'kredit';
        $kios = 3;
        $pengguna = $this->session->userdata['pengguna_id'];
        $data = array("paket_stok"=>$stok);
        parent::model("PaketModel")->editPaket($id,$data);
        $data = array(
            "transaksi_jumlah"=>$jumlah,
            "transaksi_total"=>$total,
            "transaksi_jenis"=>$jenis,
            "transaksi_kios_id"=>$kios,
            "transaksi_paket_id"=>$id,
            "transaksi_pengguna_id"=>$pengguna,
            "transaksi_keterangan"=>"Penambahan Stok Paket" );
        parent::model("TransaksiModel")->post_transaksi($data);
        parent::alert("msg","Berhasil Menambahkan Stok !!!");
        redirect("paket");
    }
    public function edit(){
        $id = $this->uri->segment(2);
        if(isset($_POST['submit'])){
            $nama = parent::post("paket_nama");
            $provider = parent::post("paket_provider_id");
            $stok = parent::post("paket_stok");
            $satuan = parent::post("paket_harga_satuan");
            $data = array(
                "paket_nama"=>$nama,
                "paket_provider_id"=>$provider,
                "paket_stok"=>$stok,
                "paket_harga_satuan"=>$satuan,
            );
            parent::model("PaketModel")->editPaket($id,$data);
            parent::alert("msg","Berhasil Memperbarui Data !!!");
            redirect("paket");
        }
        else{
            $data['title'] = "Paket";
            $param = array('paket_id'=>$id);
            $data['provider'] = parent::model("ProviderModel")->get_provider()->result();
            $data['row'] = parent::model("PaketModel")->getOne($param);
            parent::template('paket/edit',$data);
        }
    }
    public function detail(){
        $id = parent::post("paket_id");
        $isi = parent::model("PaketModel")->getOneJoin($id)->row_array();
        echo json_encode($isi);
    }

    public function delete(){
        $data['title'] = "Paket";
        $id = $this->uri->segment(2);
        $data = array("paket_id"=>$id);
        parent::model("PaketModel")->deletePaket($data);
        parent::alert("msg","Berhasil Menghapus Data !!!");
        redirect("paket");
    }
}
