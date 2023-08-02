<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\DeviationsInvestigation;
use App\Models\MesSystem;
use App\Models\CountryModel;


class Home extends BaseController
{

    protected $middleware = ['auth'];

    public function index()
    {
        $countryModel = new CountryModel;
        $countryList = $countryModel->findAll();

        return view('index', ['countries' => $countryList]);
    }

    public function dashboard($batchId)
    {
        $catModel = new CategoryModel;
        $subCatModel = new SubCategoryModel;

        $deviationsModel = new DeviationsInvestigation;
        $mesSystemsModel = new MesSystem;
        
        $categories = $catModel->select('cat_id, cat_name')->findAll();

        $data = [];

        foreach($categories as $category) {
            $data[$category->cat_name] = $subCatModel->select('sub_category.sub_cat_id, sub_category.sub_cat_name, sub_category.value_type, sub_category.input_type, p.param_id, p.param_value, p.batch_id')
            ->join('params as p', 'p.sub_cat_id = sub_category.sub_cat_id')
            ->where('cat_id', $category->cat_id)
            ->where('p.batch_id', $batchId)
            ->find();
        }
    
        $deviations = $deviationsModel->where('batch_id', $batchId)->paginate(10);
        $mesSystems = $mesSystemsModel->where('batch_id', $batchId)->paginate(10);
        
        return view('dashboard', ['data' => $data, 'deviations' => $deviations, 'mesSystems' => $mesSystems, 'pager' => $deviationsModel->pager]);
    }

    public function exportReport() {

        $catModel = new CategoryModel;
        $subCatModel = new SubCategoryModel;

        $batchId = $this->request->getGet('batch_id');
        $categories = $catModel->select('cat_id, cat_name')->findAll();

        $data = [];

        foreach($categories as $category) {
            $result = $subCatModel->select('sub_category.*, p.param_id, p.param_value, p.batch_id')
            ->join('params as p', 'p.sub_cat_id = sub_category.sub_cat_id')
            ->where('cat_id', $category->cat_id)
            ->where('p.batch_id', $batchId)
            ->find();

            if(!empty($result)) {
                $data[$category->cat_name] = $result;
            }
        }

        if(!empty($data)) {
            $pdf = new \Mpdf\Mpdf();
            $html = view('templates/report_export_template',["exportDatas" => $data]);
            $pdf->WriteHTML($html);
            $this->response->setHeader('Content-Type', 'application/pdf');
            $pdf->Output($data['Batch Information'][0]->param_value.'.pdf','D');
        } else {
            Alert('warning', '', 'No Data Found!');
            return redirect()->back();
        }
    }
}
