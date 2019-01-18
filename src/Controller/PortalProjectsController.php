<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PortalProjects Controller
 *
 */
class PortalProjectsController extends AppController
{
	public function index()
	{
		$this->view = '/Pages/portal-projects';
	}
	public function companies()
	{
		$this->view = '/Pages/companies';
	}
	public function company()
	{
		$this->view = '/Pages/company';
	}
	public function projects()
	{
		$this->view = '/Pages/projects';
	}
	public function home()
	{
		$this->view = '/Pages/home';
	}
	public function project()
	{
		$this->view = '/Pages/project';
	}
	public function Projectcodes()
	{
		$this->view = '/Projectcodes/Codigos-proyecto';
	}
	public function curva()
	{
	  // $ch = curl_init();
	  // curl_setopt($ch, CURLOPT_URL, "http://demo-bog.verano.com.co:7002/ords/primavera_link/hr/v1/curva");
	  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	  // $headers = array();
	  // $headers[] = "Authorization: Bearer ".$_SESSION["token"];
	  // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	  // $result = curl_exec($ch);
	  // $result_arr2 = json_decode($result, true);
	  // $ArrayFecha = array();
	  // $ArrayActual = array();
	  // $ArrayCompletion = array();
	  // $ArrayPlaneado = array();
	  // $ArrayPlannedunits = array();
	  // $ArrayActualunits = array();
	  // $ArrayRemainingunits = array();
	  // $var1 = array_values($result_arr2);
	  // $var2 = array_values($result_arr2)[0];
	  // foreach($var2 as $row => $value)
	  // {
	  //   $fecha = $value["daydate"];
	  //   $fecha2 = date("d/m/Y", strtotime($fecha));
	  //   $Planeado = $value["plannedacum"];
	  //   $Actual = $value["actualacum"];
	  //   $Completion = $value["atcompletionacum"];
	  //   $Plannedunits = $value["plannedunits"];
	  //   $Actualunits = $value["actualunits"];
	  //   $Remainingunits = $value["remainingunits"];
	  //   array_push($ArrayFecha, $fecha2);
	  //   array_push($ArrayPlaneado, $Planeado);
	  //   array_push($ArrayActual, $Actual);
	  //   array_push($ArrayCompletion, $Completion);
	  //   array_push($ArrayPlannedunits, $Plannedunits);
	  //   array_push($ArrayActualunits, $Actualunits);
	  //   array_push($ArrayRemainingunits, $Remainingunits);
	  //   $fecJson = json_encode($ArrayFecha);
	  //   $PlanJson = json_encode($ArrayPlaneado);
	  //   $ActJson = json_encode($ArrayActual);
	  //   $CompJson = json_encode($ArrayCompletion);
	  //   $PlanUnitsJson = json_encode($ArrayPlannedunits);
	  //   $ActUnitsJson = json_encode($ArrayActualunits);
	  //   $RemainJson = json_encode($ArrayRemainingunits);
	  //   $this->set('fecJson',$fecJson);
	  //   $this->set('PlanJson',$PlanJson);
	  //   $this->set('ActJson',$ActJson);
	  //   $this->set('CompJson',$CompJson);
	  //   $this->set('PlanUnitsJson',$PlanUnitsJson);
	  //   $this->set('ActUnitsJson',$ActUnitsJson);
	  //   $this->set('RemainJson',$RemainJson);
	  // }
	  // $SumArray = array_sum($ArrayActual);
	  // $SumArray2 = array_sum($ArrayPlaneado);
	  // $Result = ($SumArray * 100)/$SumArray2;
	  // $Result2 = (100-$Result);
	  // $data1 = bcdiv($Result, '1', 1);
	  // $data2 = bcdiv($Result2, '1', 1);
	  // $this->set('data1',$data1);
	  // $this->set('data2',$data2);
	  // if (curl_errno($ch)) {
	  //     echo 'Error:' . curl_error($ch);
	  // }
	  // curl_close ($ch);
	}
}
