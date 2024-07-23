<?php

namespace App\Controllers;
use App\Models\Data;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;


class TampilkanData extends BaseController
{
    public function index()
    {   
        if (session()->get('username') == '') 
        {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/login'));
        }
        
        $model = new Data;
        $allData = $model->getAllData();
        $allDataArr = [];
        
        foreach ($allData as $item) {
            $allDataArr[] = [
                'id_pendaftaran' => $item['id_pendaftaran'],
                'nama_depan' => $item['nama_depan'],
                'nama_tengah' => $item['nama_tengah'],
                'nama_belakang' => $item['nama_belakang'],
                'negara' => $item['negara'],
                'kota' => $item['kota'],
                'kode_pos' => $item['kode_pos'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'nomor_handphone' => $item['nomor_handphone'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'email' => $item['email'],
            ];
        }
        $data['allData'] = $allDataArr;

        return view("tampilkan_data", $data);
    }

    public function delete()
    {
        $id = $this->request->getPost('id_pendaftaran');
        $model = new Data;
        $model->deleteData($id);

        
        return redirect()->to('/tampilkan_data')->with('success', 'Data deleted successfully');
    }

    public function excel()
    {
        $model = new Data;
        $allData = $model->getAllData();
        $spreadsheet = new Spreadsheet();

        $spreadsheet->getProperties()
                    ->setCreator('rizq')
                    ->setLastModifiedBy('rizq')
                    ->setTitle('Export Data')
                    ->setSubject('Export Data')
                    ->setDescription('Exported data from the database.')
                    ->setKeywords('phpspreadsheet')
                    ->setCategory('Export');
        
        $spreadsheet->setActiveSheetIndex(0)
                    ->mergeCells('B1:I1')
                    ->setCellValue('B1', 'Export Data to Excel');
                    
        $spreadsheet->getActiveSheet()->getStyle('B1')->applyFromArray([
                        'font' => [
                            'bold' => true,
                            'size' => 16,
                        ],
                        'alignment' => [
                            'horizontal' => Alignment::HORIZONTAL_CENTER,
                            'vertical' => Alignment::VERTICAL_CENTER,
                        ],
                    ]);

        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('B2', 'Nama')
                    ->setCellValue('C2', 'Negara')
                    ->setCellValue('D2', 'Kota')
                    ->setCellValue('E2', 'Kode Pos')
                    ->setCellValue('F2', 'Jenis Kelamin')
                    ->setCellValue('G2', 'Nomor HP')
                    ->setCellValue('H2', 'Tanggal Lahir')
                    ->setCellValue('I2', 'Email');
        
        $spreadsheet->getActiveSheet()->getStyle('B2:I2')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'argb' => 'FFA0A0A0',
                ],
            ],
        ]);
        
        $row = 3;
        foreach ($allData as $product) {
            $spreadsheet->getActiveSheet()
                ->setCellValue('B' . $row, $product['nama_depan']. " " . $product['nama_tengah'] . " " . $product['nama_belakang'])
                ->setCellValue('C' . $row, $product['negara'])
                ->setCellValue('D' . $row, $product['kota'])
                ->setCellValue('E' . $row, $product['kode_pos'])
                ->setCellValue('F' . $row, $product['jenis_kelamin'])
                ->setCellValue('G' . $row, $product['nomor_handphone'])
                ->setCellValue('H' . $row, $product['tanggal_lahir'])
                ->setCellValue('I' . $row, $product['email']);
            
            $spreadsheet->getActiveSheet()->getStyle('B' . $row . ':I' . $row)->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                    ],
                ],
            ]);
            $row++;
        }

        $spreadsheet->getActiveSheet()->setTitle('Export Data');
        $spreadsheet->setActiveSheetIndex(0);
    
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="export data.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $model = new Data;

        $allData = $model->search($keyword);
        $allDataArr = [];
        
        foreach ($allData as $item) {
            $allDataArr[] = [
                'id_pendaftaran' => $item['id_pendaftaran'],
                'nama_depan' => $item['nama_depan'],
                'nama_tengah' => $item['nama_tengah'],
                'nama_belakang' => $item['nama_belakang'],
                'negara' => $item['negara'],
                'kota' => $item['kota'],
                'kode_pos' => $item['kode_pos'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'nomor_handphone' => $item['nomor_handphone'],
                'tanggal_lahir' => $item['tanggal_lahir'],
                'email' => $item['email'],
            ];
        }
        $data['allData'] = $allDataArr;

        return view("tampilkan_data", $data);
    }

}