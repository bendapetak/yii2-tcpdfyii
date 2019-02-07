<?php

/**
 * @copyright Copyright &copy;2019
 * @company CV. Karyo Cipto Mandiri 
 * @website http://www.bendapetak.com
 * @package yii2-tcpdf
 * @github https://github.com/bendapetak/yii2-tcpdfyii
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @tcpdf library 6.2.26
 * @tcpdf documentation http://www.tcpdf.org/docs.php
 * @tcpdf examples http://www.tcpdf.org/examples.php
 */

namespace bendapetak\tcpdfyii;

require_once(dirname(__FILE__).'/tcpdf/tcpdf.php');

/**
 * Description of TcPDF
 *
 * @author HP
 */
class TCPDFYii extends \TCPDF{
    
    public function __construct($orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false, $pdfa = false) {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache, $pdfa);
    }  
       
}
