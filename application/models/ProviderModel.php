<?php
	
	class ProviderModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function initTable(){
            return "tbl_provider";
        }
        public function get_provider()
		{
			return parent::get_object_of_table($this->initTable());
		}
		public function post_provider($data){
            return parent::insert_data($this->initTable(),$data);
        }
        public function getOne($param){
            return parent::get_array_of_row($this->initTable(),$param);
        }
        public function editprovider($id,$data){
            return parent::update_table($this->initTable(),"provider_id",$id,$data);
        }
        public function deleteprovider($data){
            return parent::delete_row($this->initTable(),$data);
        }
        public function checkMail($data){
            return parent::get_object_of_row($this->initTable(),$data);
        }

    }