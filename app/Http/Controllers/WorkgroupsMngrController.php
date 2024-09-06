<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class WorkgroupsMngrController extends Controller
{
    public function showImportForm()
    {
        return view('workgroups-mngr.import');
    }
    public function importFromCsv(Request $request)
    {
        // Validate the request
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt'
        ]);

        // Get the uploaded file
        $csvFile = $request->file('csv_file');

        // Open the CSV file
        $csvData = file_get_contents($csvFile->getRealPath());

        // Split the CSV data into rows
        $rows = explode("\n", $csvData);

        // Skip the header row
        array_shift($rows);

        // Insert the data into the database
        foreach ($rows as $row) {
            $data = str_getcsv($row);
            DB::table('workgroups_mngr')->insert([
                'name' => $data[0],
                'refr' => $data[1],
                'desc' => $data[2],
                'locn' => $data[3],
                'estartdate' => $data[4],
                'key1' => $data[5],
                'key2' => $data[6],
                'key3' => $data[7],
                'key4' => $data[8],
                'key5' => $data[9],
                'n' => $data[10],
                'admn' => $data[11],
                'cord' => $data[12],
                'oper' => $data[13],
                'mngr' => $data[14],
                'mngr_email' => $data[15]
            ]);
        }

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }
}