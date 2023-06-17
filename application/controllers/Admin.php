<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->get_datasess = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->model('M_Front');
        $this->load->model('M_Admin');
        $this->get_datasetupapp = $this->M_Front->fetchsetupapp();
    }


    public function settingapp()
    {
        is_admin();
        $data = [
            'title' => 'Setting Aplikasi',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/settingapp', $data);
        $this->load->view('layout/footer', $data);
    }

    public function dashboard()
    {
        is_admin();
        $data = [
            'title' => 'Dashboard Absensi',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $data['jmlpegawai'] = $this->M_Admin->hitungjumlahdata('jmlpgw');
        $data['pegawaitelat'] = $this->M_Admin->hitungjumlahdata('pgwtrl');
        $data['pegawaimasuk'] = $this->M_Admin->hitungjumlahdata('pgwmsk');
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('layout/footer', $data);
    }

    public function datapegawai()
    {
        is_admin();
        $data = [
            'title' => 'Data Pegawai',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp,
            'fetchdbpegawai' => $this->M_Admin->fetchlistpegawai()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/datapegawai', $data);
        $this->load->view('layout/footer', $data);
    }
    public function assesment()
    {
        is_moderator();
        $data = [
            'title' => 'Self Assesment',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/assesment', $data);
        $this->load->view('layout/footer', $data);
    }
    public function formkpi()
    {
        is_moderator();
        $data = [
            'title' => 'Form KPI',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/formkpi', $data);
        $this->load->view('layout/footer', $data);
    }
    public function datakpi()
    {
        is_moderator();
        $data = [
            'title' => 'Data KPI',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/datakpi', $data);
        $this->load->view('layout/footer', $data);
    }
    public function datainsentif()
    {
        is_moderator();
        $data = [
            'title' => 'Data Insentif',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/datainsentif', $data);
        $this->load->view('layout/footer', $data);
    }
    public function dataassesment()
    {
        is_moderator();
        $data = [
            'title' => 'Data Self-Assesment',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/dataassesment', $data);
        $this->load->view('layout/footer', $data);
    }
    public function dataloktugas()
    {
        is_moderator();
        $data = [
            'title' => 'Data Lokasi Tugas',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/dataloktugas', $data);
        $this->load->view('layout/footer', $data);
    }
    public function datashift()
    {
        is_moderator();
        $data = [
            'title' => 'Data Shift',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/datashift', $data);
        $this->load->view('layout/footer', $data);
    }
    public function absensi()
    {
        is_moderator();
        $data = [
            'title' => 'Kehadiran Pegawai',
            'user' => $this->get_datasess,
            'dataapp' => $this->get_datasetupapp
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('admin/absenpegawai', $data);
        $this->load->view('layout/footer', $data);
    }
}
