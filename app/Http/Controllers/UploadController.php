<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;

class UploadController extends Controller
{
    public function index()
    {

        return view('upload.index');
    }

    public function create(Request $request)
    {
        if (!$request->hasFile('filename')){
            return 'Please, upload a file';
        }
        if (!$request->file('filename')->isValid()) {
            return 'File was corrupted.';
        }
        $lesson=$request->input('lesson');

        $file=$request->file('filename')->store('xlsx');
        $filepath = Storage::path($file);
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($filepath);
        $highestRow = $spreadsheet->getActiveSheet()->getHighestRow();

        $highestColumn = $spreadsheet->getActiveSheet()->getHighestColumn();
        $range="A1:$highestColumn$highestRow";
        $dataArray = $spreadsheet->getActiveSheet()
            ->rangeToArray($range, null, true, true, true);
        foreach ($dataArray as $value) {
            Phrase::create(
                [
                    'rus'=>$value['A'],
                    'eng'=>$value['B'],
                    'lesson'=>$lesson
                ]
            );
        }

        Storage::delete($file);

        return back();
    }

    public function test()
    {

    }
}
