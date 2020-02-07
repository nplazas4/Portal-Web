<?php
namespace App\Controller;

use App\Controller\AppController;

class DocumentsController extends AppController
{
    public function index($view = null)
    {
        try {
          $this->set('view', $view);
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
		public function form()
    {
        try {
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
		public function pdf($Pdf_Title = "test"){
      $this->viewBuilder()->options([
      'pdfConfig' => [
        'orientation' => 'portrait',
        'filename' => $Pdf_Title.'.pdf'
      ]
      ]);
    }
    public function test($Pdf_Title = null){

    }
}
