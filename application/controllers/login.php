<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }


    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->load->view('login/index');
    }

    public function cekLogin()
    {
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->model_model->getUsername($username);

        if ($getUser) {
            $data = [
                'username' => $username,
                'loggedin_time' => time()
            ];
            $this->session->set_userdata($data);
            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<p>Maaf, anda tidak terdaftar</p>');
            redirect('login');
        }
    }

    public function show()
    {
        $session = $this->session->userdata('username');
        if ($session != null) {
            $data['data'] = $this->db->query('select * from artikel');

            $this->load->view('view', $data);
        } else {
            redirect('index.php/login');
        }
    }

    public function hapus($nilai)
    {
        $userdata = $nilai->username;
        $userrole = $nilai->role;
        $data = $this->db->get_where('artikel', ['id' => $nilai]);
        $userrole;
        foreach ($data->result() as $row) {
            # code...
            $userrole = $row->role;
        }

        $session = $this->session->userdata('role');
        if ($userrole == "admin" || $userrole == "user1" || $userrole == "user2") {
            $this->db->delete('artikel', array('id' => $nilai));
            redirect('index.php/login/show');
        } else if ($userrole != $session) {
            echo "Tidak dapat dihapus ";
            redirect('index.php/login/show');
        } else {

            $this->db->delete('artikel', array('id' => $nilai));

            redirect('index.php/login/show');
        }
    }

    public function data()
    {
        $session = $this->session->userdata('role');
        if ($session == "admin") {
            $this->load->view('tambah');
        } else {
            redirect('index.php/login/show');
        }
    }

    public function tambahData()
    {

        $data = $this->input->post('deskripsi');
        $data2 = $this->input->post('role');

        $this->db->insert('artikel', ['deskripsi' => $data, 'role' => $data2]);

        redirect('index.php/login/show');
    }


    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->unset_userdata('role');

        redirect('index.php/login/');
    }

    public function update($nilai)
    {
        $session = $this->session->userdata('role');
        if ($session == "admin") {
            $data['nilai'] = $nilai;
            $this->load->view('update', $data);
        } else {
            redirect('index.php/login/show');
        }
    }

    public function updateData()
    {

        $data = $this->input->post('deskripsi');
        $nilai = $this->input->post('nilai');
        $role = $this->input->post('role');

        $this->db->replace('artikel', ['id' => $nilai, 'deskripsi' => $data, 'role' => $role]);

        redirect('index.php/login/show');
    }
}
