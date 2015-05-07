<?php

class Cetak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('PHPExcel', 'PHPExcel/IOFactory'));
        $this->load->model('');
    }

//    function index() { terimakasih
//        $objPHPExcel = new PHPExcel();
//
//        // Set properties
//        $objPHPExcel->getProperties()
//                ->setCreator("SMA Insan Cendekia Alkautsar") //creator
//                ->setTitle("Jadwal pelajaran");  //file title
//
//        $objset = $objPHPExcel->setActiveSheetIndex(0); //inisiasi set object
//        $objget = $objPHPExcel->getActiveSheet();  //inisiasi get object
//
//        $objget->setTitle('Sample Sheet'); //sheet title
//        $objset->setCellValue('A1', "This is Sample Excel File"); //insert cell value
//        $objget->getStyle('A1')->getFont()->setBold(true)  // set font weight
//                ->setSize(15);    //set font size
//        //table header
//        $cols = array("A", "B", "C", "D", "E", "F");
//        $val = array("No", "Member ID", "Member Username", "Member Address", "Member Phone", "Member Status");
//        for ($a = 0; $a < 6; $a++) {
//            $objset->setCellValue($cols[$a] . '3', $val[$a]);
//            //set borders
//            $objget->getStyle($cols[$a] . '3')->getBorders()->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//            $objget->getStyle($cols[$a] . '3')->getBorders()->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//            $objget->getStyle($cols[$a] . '3')->getBorders()->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//            $objget->getStyle($cols[$a] . '3')->getBorders()->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//
//            //set alignment
//            $objget->getStyle($cols[$a] . '3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//            //set font weight
//            $objget->getStyle($cols[$a] . '3')->getFont()->setBold(true);
//        }
//
//        //taruh baris data disini
//        //simpan dalam file sample.xls
//        $objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
//        $objWriter->save('assets/file/sample.xls');
//    }

    function index() {
        if ($this->input->post('save')) {
            $fileName = $_FILES['import']['name'];

            $config['upload_path'] = './assets/files/';
            $config['file_name'] = $fileName;
            $config['allowed_types'] = 'xls|xlsx';
            $config['max_size'] = 10000;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('import'))
                $this->upload->display_errors();

            $media = $this->upload->data('import');
            $inputFileName = './assets/files/' . $media['file_name'];

            //  Read your Excel workbook
            try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }

            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

            //  Loop through each row of the worksheet in turn
            for ($row = 2; $row <= $highestRow; $row++) {                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                //  Insert row data array into your database of choice here
                $data = array(
                    "member_id" => $rowData[0][1],
                    "member_name" => $rowData[0][2],
                    "member_birthdate" => $rowData[0][3],
                    "member_address" => $rowData[0][4],
                    "member_phone" => $rowData[0][5],
                    "member_gender" => $rowData[0][6],
                    "member_email" => $rowData[0][7],
                    "member_status" => $rowData[0][8]
                );

                $this->db->insert("member", $data);
            }
            echo "Import Success";
        }
        $this->load->view('import_view');
    }
    
    function cetak(){
        $this->load->view('import_view');
    }
    
    function perubahan(){
        $this->load->view('harusnya_perubahan');
    }
    
    function perubahan2(){
        $this->load->view('harusnya_perubahan');
    }

}
