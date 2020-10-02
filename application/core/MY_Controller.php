
<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function view($data = [], $layout = 'base/layout', $return = false) 
    {
        if ($return)
            return $this->load->view($layout, $data, $return);

        $this->load->view($layout, $data);
    }
}