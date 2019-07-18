<?php
	
	class PenggunaModel extends  GLOBAL_Model {

        public function __construct()
        {
            parent::__construct();
        }
        public function get_pengguna()
		{
			return parent::get_object_of_table('tbl_pengguna');
		}


    }