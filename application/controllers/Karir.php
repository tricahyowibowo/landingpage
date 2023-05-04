<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * @author : Tri Cahya Wibawa
 * @version : 1.1
 * @since : 23 Maret 2023
 */
class Karir extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('crud_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Mirota KSM | Bergabung Bersama Kami';

        $data = array(
            'list_data'       => $this->crud_model->tampildata('tbl_lowongan'),
        );

        
        $this->loadPageViews("pages/karir", $this->global ,$data , NULL);
    }

    public function formulir()
    {
        $this->global['pageTitle'] = 'Mirota KSM | Formulir';
        
        $this->loadPageViews("pages/form_lowongan", $this->global , NULL);
    }

    public function datalowongan()
    {
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'Mirota KSM | Data Lowongan Kerja';

        $data = array(
            'list_data'       => $this->crud_model->tampildata('tbl_lowongan'),
          );

        $this->loadViews("adminpanel/karir/data_lowongan", $this->global, $data , NULL);

    }

    public function save(){

        $nama_lowongan = $this->input->post('nama_lowongan');
        $kategori = $this->input->post('kategori');
        $lokasi = $this->input->post('lokasi');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_lowongan' => $nama_lowongan,
            'kategori' => $kategori,
            'wilayah' => $lokasi,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
            'deskripsi' => $deskripsi,
        );

        $this->crud_model->input($data, 'tbl_lowongan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

        redirect('datalowongan');
    }

    public function datapelamar()
    {
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'Mirota KSM | Data Lowongan Kerja';

        $data = array(
            'list_data'       => $this->crud_model->tampildata('tbl_pelamar'),
          );

        $this->loadViews("adminpanel/karir/data_pelamar", $this->global, $data , NULL);

    }

    public function savepelamar(){
        $data = array();
        $config['upload_path']          = './assets/dokumen_kunjungan';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg|pdf';

        $this->load->library('upload', $config);
        

        if (!$this->upload->do_upload('file_surat')) {

            $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="allert">Data Gagal Ditambah!</div>');
            $this->formulir();

        } else {

            $fileData = $this->upload->data();
            $data['file_surat'] = $fileData['file_name'];
            $data['file_cv'] = $fileData['file_name'];
            $data['file_ijazah'] = $fileData['file_name'];
            $data['file_ktp'] = $fileData['file_name'];
            $data['file_lampiran'] = $fileData['file_name'];
            

            $posisi = $this->input->post('posisi');
            $nama_pelamar = $this->input->post('nama_pelamar');
            $no_ktp = $this->input->post('no_ktp');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_wa = $this->input->post('no_wa');


            $data = array(
                'posisi_id' => $posisi,
                'nama_pelamar' => $nama_pelamar,
                'no_ktp' => $no_ktp,
                'alamat_pelamar' => $alamat,
                'email_pelamar' => $email,
                'no_wa' => $no_wa,
                'file_surat' => $data['file_surat'],
                'file_cv' => $data['file_cv'],
                'file_ijazah' => $data['file_ijazah'],
                'file_ktp' => $data['file_ktp'],
                'file_lampiran' => $data['file_lampiran'],
            );
        }

        $this->crud_model->input($data, 'tbl_pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

        redirect('formulir');
    }
}