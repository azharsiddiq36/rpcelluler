<?php
	
	class PaketModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_paket";
        }
        public function get_paket()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_paket($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editpaket($id,$data){
            return parent::update_table($this->initTable(),"paket_id",$id,$data);
        }
        public function deletepaket($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function getJoin(){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $query = $this->db->get();
            return $query;
        }
        public function getOneJoin($id){
            $this->db->select('*');
            $this->db->from($this->initTable());
            $this->db->join('tbl_provider', 'tbl_provider.provider_id = tbl_paket.paket_provider_id');
            $this->db->where('paket_id',$id);
            $query = $this->db->get();
            return $query;
        }

    }