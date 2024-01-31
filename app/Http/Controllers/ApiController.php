<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class ApiController extends Controller
{
    //
    public function customerAll()
    {
        $data = Customer::get();
        return ['data' => $data->toArray()];
    }
}
