<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GLOBAL_Controller extends CI_Controller {
	public $userID;
	public $userLevel;
	public $userName;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * helper lives here
	 * include templating helper, debugging & error helper, core helper
	 * */
	
	// system helper
    public function setRule(){
        $hak = $this->session->userdata['pengguna_hak_akses'];
        if ($this->uri->segment(3) != $hak && $hak != "administrator"){
            redirect(base_url('dashboard'));
        };
    }
	public function model($model)
	{
		return $this->$model;
	}
	public function post($value)
	{
		return $this->input->post($value);
	}
	public function get($value)
	{
		return $this->input->get($value);
	}
	public function cek_array($arr)
	{
		echo "<pre>";
		print_r($arr);
		exit;
	}
	public function cek_type($var)
	{
		echo "<pre>";
		var_dump($var);
		exit;
	}
	public function hasLogin()
	{
	    $x = false;

		if($this->session->has_userdata('sess_user') == true){
		    $x = true;
        }

		return $x;
	}
	
	//	templating helper
	public function template($content,$data)
	{
		$this->load->view('templates/template_header', $data);
		$this->load->view($content, $data);
		$this->load->view('templates/template_footer', $data);
	}
	public function authPage($content,$data)
	{
		$this->load->view($content,$data);
	}
	public function alert($name,$value)
	{
		$this->session->set_flashdata($name,$value);
	}
	
}
