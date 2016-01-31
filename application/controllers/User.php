<?php


class User extends Vb_Controller
{
    public function profile($product_id = '')
    {
        $this->_render('user/user_profile');
    }

    public function register()
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $data['errors'] = '';

            $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim|max_length[90]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('regpassword', 'Password', 'trim|required');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[regpassword]');


            if ($this->form_validation->run() == FALSE) {
                $data['errors'] = validation_errors();
            } else {
                $data = array(
                    'fname' => $this->input->post('full_name'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('regpassword')),
                    'join_date' => date('Y-m-d'),
                    'is_active' => 1,
                );

                $insert_id = $this->Vb_model->insert('user', $data);
                if ($insert_id) {
                    $data['errors'] = '';
                    $sessiondata = array(
                        'vb_user_name' => $this->input->post('full_name'),
                        'vb_logged_in' => TRUE,
                        'vb_user_email' => $this->input->post('email'),
                        'vb_user_id' => $insert_id,
                        'vb_user_photo' => '',
                        'vb_user_role' => 1
                    );
                    $this->session->set_userdata('vb_login_user', $sessiondata);
                } else {
                    $data['errors'] = "Something went wrong !!";
                }
            }

            echo json_encode($data);
        } else {
            redirect('home');
        }
    }

    public function login()
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['errors'] = validation_errors();
            } else {
                $data = array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                $user_information = $this->vb_model->get_by('user', $data);
                if ($user_information) {
                    $data['errors'] = '';
                    $user_information = $user_information->row();
                    $sessiondata = array(
                        'vb_user_name' => $user_information->lname,
                        'vb_logged_in' => TRUE,
                        'vb_user_email' => $user_information->email,
                        'vb_user_id' => $user_information->user_id,
                        'vb_user_photo' => '',
                        'vb_user_role' => $user_information->type
                    );
                    $this->session->set_userdata('vb_login_user', $sessiondata);
                } else {
                    $data['errors'] = "Email or Password not match";
                }
            }
            echo json_encode($data);
        } else {
            redirect('home');
        }
    }

    /**
     * password reset request using email
     */
    public function password_reset_request()
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            $this->load->library('encrypt');

            $data['errors'] = '';
            $data['success'] = '';

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                $data['errors'] = validation_errors();
            } else {
                $data = array(
                    'email' => $this->input->post('email')
                );
                $user_email_exist = $this->vb_model->get_by('user', $data);
                if ($user_email_exist) {

                    $email = $this->input->post('email');
                    $email = "mazba09@gmail.com";
                    $key = 'DRUGBDAGENCYDELTA';

                    $encrypted_string = $this->encrypt->encode($email, $key);
                    $encrypted_string = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

                    $message = 'Hello! ' . $user_email_exist->row()->fname .
                        '<br/> Reset Your Password From This : '
                        . ' <a href="' . base_url('home/password_change') .
                        '/' . $encrypted_string . '">Link</a>';
                    $from = 'adbdtest1@gmail.com';
                    $subject = "DrugBd reset password";

                    $sendmail = $this->vb_mail($email, $from, $subject, $message);
                    if ($sendmail) {
                        $data['success'] = "Mail Send Successfully To " . $email;
                        $data['errors'] = '';
                    } else {
                        $data['errors'] = "Something Went Wrong";
                    }
                } else {
                    $data['errors'] = "Email address not found";
                }
            }
            echo json_encode($data);
        } else {
            redirect('home');
        }
    }
}

