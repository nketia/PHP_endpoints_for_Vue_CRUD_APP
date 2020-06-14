<?php  
    class Players extends CI_Model {
        public function __constructor() {
            $dsn = 'dbdriver://root:root@localhost/cloud_group10';
            $this -> load -> database($dsn);
        }

        public function get_players() {
            $team = $this ->db -> query('select * from players');
            return $team->result_array();

        }

        public function get_one_player($id) {
            $player = $this ->db -> query('select * from players where player_id='.$id.';');
            return $player->result_array();

        }

        public function delete_one_player($id) {
            //check if user exist before deletion
            $player = $this ->db -> query('select * from players where player_id='.$id.';');
            $location_record = $player->row();
            if (isset($location_record)) {
            $deleteResult=$this->db->delete('players', array('player_id' => $id));
            return $deleteResult;
            }
            else {
                return "Player does not exist";
            }
        }

        public function insertResource($file_name)
        {
            $data = file_get_contents('./resourceUploads/'.$file_name);
            $team = json_decode($data, true);
            $playerArray = [];
            foreach ($team as $player) {
                foreach($player as $key => $value) {
                    array_push($playerArray, ['Name' => $value['Name'],'Age'=> $value['Age'], 
                    'City' => $value['Location']['City'], 'Province' => $value['Location']['Province'],
                     'Country' => $value['Location']['Country']]);
                 }
            }

            foreach($playerArray as $player) {
            $playerInsertResponse = $this ->db ->insert('players', $player);
            }
            return $playerInsertResponse;
        }
    
    }

?>