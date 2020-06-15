<?php  
    class Players extends CI_Model {
        public function __constructor() {
        }

        public function createTable(){
            $this->load->dbforge();
            $fields = array(
                'player_id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                ),
                'name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '45',
                ),
                'age' => array(
                        'type' =>'INT',
                        'constraint' => '5',
                ),
                'city' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '45',
                ),
                'province' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '45',
               ),
               'country' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
               ),
            );
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('player_id', true);
            $response=$this->dbforge->create_table('players');
            return $response;
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