<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

$newResourceFile = '';

class EndPoints extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}

	//endpoint for all players request
	public function getAllResources()
	{
        $data['players'] = $this->players->get_players();
		print (json_encode($data['players']));
    }
	
	//endpoint for single players request
    public function getAResource($id)
	{
        $data['player'] = $this->players->get_one_player($id);
        print(json_encode($data['player']));
    }
	
	//endpoint for player deletion request
    public function deleteAResource($id)
	{
        $data = $this->players->delete_one_player($id);
        print($data);
	}

	public function resourceUpload()
	{
        $config = array(
			//configs for file properties
			'upload_path' => "./resourceUploads/",
			'allowed_types' => "json",
			'overwrite' => TRUE,
			'max_size' => "2048000", //limiting file size to 2mb
			'max_height' => "768",
			'max_width' => "1024");
		
		$this->load->library('upload', $config);
		$userfile = 'userfile';;

		if($this->upload->do_upload($userfile)){
			$data = array('upload_data' => $this->upload->data());
			$filename = $data['upload_data']['file_name'];
			//after successful file upload, call the function to insert resource into DB 
			$data = $this->players->insertResource($filename);
			print($data);
		}
		else{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
	}

}