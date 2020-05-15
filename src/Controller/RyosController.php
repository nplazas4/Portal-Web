<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;

class RyosController extends AppController
{
    public function index()
    {
        try {
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
		public function detail($ryos = null)
    {
			try {
				$this->set('json_ryos', $ryos);
			} catch (\Exception $e) {
					exit($e->getMessage() . "\n");
			}
    }
		private function detail_ws(){

		}
    public function downloadRyos()
    {
        $this->layout = false;
        try {
            if ($this->request->is('Ajax')) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
<<<<<<< HEAD
                  CURLOPT_URL => "http://192.168.1.153:7001/ords/projects_portal/formryos/register/",
=======
                  CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/formryos/register/",
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "POST",
                  CURLOPT_POSTFIELDS => $_POST['ryos_form'],
                  CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer ".$_SESSION["PortalToken"],
                    "cache-control: no-cache"
                  ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    // echo $response;
                    $result_json = json_decode($response, true);
                    $this->response->type('json');
                    $this->response->body(json_encode($result_json));
                    return $this->response;
                }
            }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
    }
    public function download()
    {
        $this->layout = false;
        try {
            if ($this->request->is('Ajax')) {
              $ryos_json = json_decode($_POST['ryos_form'], true);
              $ryos_form= array_values($ryos_json);
              $spreadsheet = new Spreadsheet();
              $worksheet = $spreadsheet->getActiveSheet();
              $i = 3;
              $worksheet->setTitle("Ryos");
              // $worksheet->setCellValue('B1', $_POST["Name"]);
              $worksheet->setCellValue('A2', 'Etiqueta');
              $worksheet->setCellValue('B2', "Valor");
              $worksheet->getRowDimension('1')->setRowHeight(80);
              $worksheet->getColumnDimension('A')->setWidth(80);
              $worksheet->getColumnDimension('B')->setWidth(80);
              $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
              $drawing->setName('Logo');
              $drawing->setDescription('Logo');
              $Img_Dir = WWW_ROOT . 'img/logos/excel/logo.png';
              $drawing->setPath($Img_Dir); //Imagen
              $drawing->setHeight(115);
              $drawing->setCoordinates('A1');
              $drawing->setOffsetX(150);
              // $drawing->setOffsetY(0);
              $drawing->setWorksheet($spreadsheet->getActiveSheet());
              $cont = 1;
              foreach ($ryos_json as $key => $ryos_value) {
                $cont = $i++;
                $worksheet->setCellValue('A'.$cont, $key);
                $worksheet->setCellValue('B'.$cont, $ryos_value);
                  // $this->set('ryos', $key);
              }
              $worksheet2 = array(
                'borders' => array(
                  'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => array('argb' => '212121'),
                  ),
                ),
              );
              $worksheet3 = array(
                'alignment' => array(
                  'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ),
              );
              $worksheet->setShowGridlines(false);
              $worksheet->getStyle('A2:B2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('A6CE39');
              $worksheet->getColumnDimension('A')->setAutoSize(true);
              $worksheet->getColumnDimension('B')->setAutoSize(true);
              $worksheet->getStyle('B1:B'.$worksheet->getHighestRow())->applyFromArray($worksheet3);
              $worksheet->getStyle('A3:B'.$worksheet->getHighestRow())->applyFromArray($worksheet2);
              $writer = new Xlsx($spreadsheet);
              $callStartTime = microtime(true);
              $writer->save('ryos.xlsx');
              $this->response->type('json');
              $this->response->body('200');
              return $this->response;
            }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
    }
}
