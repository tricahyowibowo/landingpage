<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Kunjunganindustri extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->model('master_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Mirota KSM | Kunjungan Industri';
        
        $this->loadPageViews("pages/kunjunganindustri", $this->global, NULL);
    }

    public function formulir()
    {
        $this->global['pageTitle'] = 'Mirota KSM | Pendaftaran Kunjungan Industri';

        $getdata = $this->crud_model->getdataprov();
        $data['dataprov'] = $getdata;

        // $data = array(
        //     'provinsi' => $this->crud_model->tampil_data('provinces',NULL,'prov_name'),
        // );
        
        $this->loadPageViews("pages/form_kunjungan", $this->global,$data , NULL);
    }

    public function getdatakabupaten()
    {
        $id_provinsi = $this->input->post('provinsi');
        $getdatakab = $this->crud_model->getdatakab($id_provinsi);

        // var_dump($getdatakab);

        echo json_encode($getdatakab);
    }

    public function datakunjungan(){
        $this->isLoggedIn();
        $this->global['pageTitle'] = 'Mirota KSM | Pendaftaran Kunjungan Industri';

        $data = array(
            'list_data'       => $this->master_model->getdatakunjungan(),
          );

        $this->loadViews("adminpanel/kunjungan/data", $this->global, $data , NULL);
    }

    public function save(){
        $config['upload_path']          = './assets/dokumen_kunjungan';
        $config['allowed_types']        = 'gif|jpg|png|PNG|jpeg|pdf';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="allert">Data Gagal Ditambah!</div>');
            $this->formulir();

        } else {
            $file = $this->upload->data();
            $file_kunjungan = $file['file_name'];

            $tgl_kunjungan = $this->input->post('tgl_kunjungan');
            $nama = $this->input->post('nama');
            $instansi = $this->input->post('instansi');
            $jurusan = $this->input->post('jurusan');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kabupaten = $this->input->post('id_kabupaten');
            $alamat = $this->input->post('alamat');
            $jml_pengunjung = $this->input->post('jml_pengunjung');
            $jml_pendamping = $this->input->post('jml_pendamping');



            $data = array(
                'tgl_kunjungan' => $tgl_kunjungan,
                'nama' => $nama,
                'instansi' => $instansi,
                'jurusan' => $jurusan,
                'no_hp' => $no_hp,
                'email' => $email,
                'id_prov' => $id_provinsi,
                'id_kab' => $id_kabupaten,
                'alamat' => $alamat,
                'jml_pengunjung' => $jml_pengunjung,
                'jml_pendamping' => $jml_pendamping,
                'file' => $file_kunjungan,
            );
        }

        $this->crud_model->input($data, 'tbl_kunjungan_industri');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah! Tim Kami Akan Segera Menghubungi Instansi Anda</div>');

        redirect('formulir-kunjungan');
    }

}