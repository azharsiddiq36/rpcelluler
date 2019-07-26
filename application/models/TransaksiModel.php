<?php
	
	class TransaksiModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_transaksi";
        }
        public function get_transaksi()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_transaksi($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function edittransaksi($id,$data){
            return parent::update_table($this->initTable(),"transaksi_id",$id,$data);
        }
        public function deletetransaksi($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function getAllJoin(){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_paket', 'tbl_paket.paket_id = tbl_transaksi.transaksi_paket_id');
            $this->db->join('tbl_kios', 'tbl_kios.kios_id = tbl_transaksi.transaksi_kios_id');
            $this->db->join('tbl_pengguna', 'tbl_pengguna.pengguna_id = tbl_transaksi.transaksi_pengguna_id');
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $this->db->order_by('transaksi_id',"desc");
            $query = $this->db->get();
            return $query;
        }
        public function getNowJoin($date){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_paket', 'tbl_paket.paket_id = tbl_transaksi.transaksi_paket_id');
            $this->db->join('tbl_kios', 'tbl_kios.kios_id = tbl_transaksi.transaksi_kios_id');
            $this->db->join('tbl_pengguna', 'tbl_pengguna.pengguna_id = tbl_transaksi.transaksi_pengguna_id');
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $this->db->where('date_format(transaksi_waktu,"%Y-%m-%d")', $date);
            $query = $this->db->get();
            return $query;
        }
        public function getMonthJoin($date){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_paket', 'tbl_paket.paket_id = tbl_transaksi.transaksi_paket_id');
            $this->db->join('tbl_kios', 'tbl_kios.kios_id = tbl_transaksi.transaksi_kios_id');
            $this->db->join('tbl_pengguna', 'tbl_pengguna.pengguna_id = tbl_transaksi.transaksi_pengguna_id');
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $this->db->where('date_format(transaksi_waktu,"%m")', $date);
            $query = $this->db->get();
            return $query;
        }
        public function getYearsJoin($date){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_paket', 'tbl_paket.paket_id = tbl_transaksi.transaksi_paket_id');
            $this->db->join('tbl_kios', 'tbl_kios.kios_id = tbl_transaksi.transaksi_kios_id');
            $this->db->join('tbl_pengguna', 'tbl_pengguna.pengguna_id = tbl_transaksi.transaksi_pengguna_id');
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $this->db->where('date_format(transaksi_waktu,"%Y")', $date);
            $query = $this->db->get();
            return $query;
        }
    }