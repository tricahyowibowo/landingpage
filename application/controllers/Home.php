<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * @author : Tri Cahya Wibawa
 * @version : 1.1
 * @since : 23 Maret 2023
 */
class Home extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Mirota KSM | Home';
        
        $this->loadPageViews("pages/home", $this->global , NULL);
    }

}