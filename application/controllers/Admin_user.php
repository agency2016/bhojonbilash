<?php

//controller for all functions related to admin 
class Admin_user extends Vb_Controller {

   private  $js_css_array = array('vb_css'=>array('vb_admin'),'vb_js'=>array('admin_user'));

    public function __construct() {
       
        parent::__construct($this->js_css_array);
   
    }
    /**
     * user page show
     */
    public function users() {
        $data = array();
        $this->_render_admin('user/user_list',$data);
    }// end of func dashboard
    
public function all_user() {
        $data = array();

        $user_list = $this->Vb_model->get_all('user');
        if($user_list){
            $data['all_user'] =$user_list->result();
        }
        else{
            $data['all_user'] =array();
        }
        
        echo json_encode($data['all_user']);
    }
    //insert data
	public function insert_user()
	{
		if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
			$this->response(array('error' => 'Missing post data: fname'), 400);
		}
		else{
                        $data = json_decode(file_get_contents('php://input'), TRUE);
                        
			$insert_data = array(
				'fname' => $data['fname'],
				'email' => $data['email'],
				'password' => '123',
				'lname' => 'Last Name'
				
			);
			//var_dump($data);
		}
		$this->db->insert('user',$insert_data);
		if($this->db->insert_id() > 0)
		{
			$message = array('user_id' => $this->db->insert_id(), 'fname' => $data['fname'],'email' => $data['email']);
			echo json_encode($message); // 200 being the HTTP response code
		}
	}
	
	public function delete_user($id=NULL)
	{
		 if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
			$this->response(array('error' => 'Missing post data: fname'), 400);
		}
                else{
                    $data = json_decode(file_get_contents('php://input'), TRUE);
                    $this->db->delete('user',array('user_id'=>$data['user_id']));
                }
	}
	
	public function update_user()
	{
                if (!$this->input->server('REQUEST_METHOD') === 'POST') {
		
			$this->response(array('error' => 'Missing post data: fname'), 400);
		}
		else{
                        $data = json_decode(file_get_contents('php://input'), TRUE);
                        
			$insert_data = array(
				'fname' => $data['fname'],
				'email' => $data['email'],
				'password' => '123',
				'lname' => 'Last Name',
				'phone' => '123456',
				'gender' => 1,
				'is_active' => 1,
				'type' => 1
			);
			//var_dump($data);
		}
		$this->db->update('user',$insert_data,array('user_id'=>$data['user_id']));
		if($this->db->insert_id() > 0)
		{
			$message = array('user_id' => $this->db->insert_id(), 'fname' => $data['fname'],'email' => $data['email']);
			echo json_encode($message); // 200 being the HTTP response code
		}
		
	}
        
}?>