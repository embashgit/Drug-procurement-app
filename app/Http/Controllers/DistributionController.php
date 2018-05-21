<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class DistributionController extends Controller
{
    public function edit($id)
    {
       $drug = Drug::FindOrFail($id);
        $all_drugs = Drug::all();
        return View('drugs.distribute.edit', compact('drug', 'all_drugs'));
    }

}
