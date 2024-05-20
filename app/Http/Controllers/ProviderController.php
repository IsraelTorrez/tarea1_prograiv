<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function listProviders()
    {
        $providers = Provider::get();

        return response()->json([
            'providers'=>$providers,
            'status'=>true
        ]);
    }
}
