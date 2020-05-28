
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;
function generate_pdf($object, $filename, $direct_download = false) {
    require_once("./vendor/autoload.php");
    $dompdf = new DOMPDF();
    $dompdf->load_html($object);
    $dompdf->render();
    if($direct_download == true) {
       $dompdf->stream($filename);
    } else {
        return $dompdf->output();
    } 
}