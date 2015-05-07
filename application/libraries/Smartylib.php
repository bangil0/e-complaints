<?php
/**
 * See http://www.smarty.net/docs/en/installing.smarty.extended.tpl.
 */
 
# memanggil file dasar dari smarty
require './application/third_party/smarty/libs/Smarty.class.php';
 
# menentukan class dari librari yang akan kita buat
# nama class harus sama dengan nama file librari dan di awali dengan huruf kapital
 
class Smartylib extends Smarty {
    public function __construct() {
        parent::__construct();
         
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
         
        # tempat hasil compile dari smarty
        # karena smarty akan melakukan compile komponen halaman web 
        # sehingga penamilanny diambil dari chahce yang ada
        $this->setCompileDir(FCPATH . APPPATH . 'cache' . DS);
         
        # tempat chace
        $this->setCacheDir(FCPATH . APPPATH . 'cache' . DS);
         
        # tempat template
        $this->setTemplateDir(FCPATH . APPPATH . 'views' . DS);
    }
}
 
/* End of file Smartylib.php */
/* Location: ./application/libraries/Smartylib.php */ 