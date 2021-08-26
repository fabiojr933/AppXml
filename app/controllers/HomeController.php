<?php

namespace app\controllers;

use app\core\Controller;
use DOMDocument;
use SimpleXMLElement;

class HomeController extends Controller
{
   public function index()
   {
      $dados["view"]       = "home";
      $this->load("template", $dados);
   }
   public function lerXML()
   {

      $cnpjNOVO = $_POST["cnpj"];

      $_UP['pasta'] = 'xml_original/';
      $nome_final = $_FILES['arquivo']['name'];

      $extensao = pathinfo($nome_final);
      $extensao = $extensao['extension'];

      if ($extensao == 'xml') {
         if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
         } else {
            echo "Opss!! Ocorreu algum erro, entre em contato com o suporte!";
         }
         $fileContent = simplexml_load_file("xml_original/" . $nome_final);

         $fileContent->NFe->infNFe->dest->CNPJ = $cnpjNOVO;
         file_put_contents("xml_final/" . $nome_final, $fileContent->saveXML());

         // header("Location:" . URL_BASE . "xml_final/" . $nome_final);

         // Configuramos os headers que serão enviados para o browser
         header('Content-Description: File Transfer');
         header('Content-Disposition: attachment; filename="' . "xml_final/" . $nome_final . '"');
         header('Content-Type: application/octet-stream');
         header('Content-Transfer-Encoding: binary');
         header('Content-Length: ' . filesize("xml_final/" . $nome_final));
         header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
         header('Pragma: public');
         header('Expires: 0');
         // Envia o arquivo para o cliente
         readfile("xml_final/" . $nome_final);
      }else{
         $this->redirect(URL_BASE."home/xml");
      }
   }
   public function xml(){
      $dados["view"] = "erro/xml";
      $this->load("template", $dados);
   }
}
