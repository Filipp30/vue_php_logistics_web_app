<?php



class mainController {

    function send_mail($data){
        $mailer = new Mailer\Mailer();
        $res = $mailer->send_mail($data->full_name,$data->email,$data->subject,$data->message);
        echo json_encode($res);
        exit;
    }

    private function create_pdf_file(){
        $pdf = new Pdf_Creator\Pdf_Creator();
        $pdf->create_pdf();
    }



}
