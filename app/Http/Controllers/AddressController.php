<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function index(Request $r)
    {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $r)
    {
        $addresses = Address::find($r->id);
        return $addresses;
    }

    public function insert(Request $r)
    {
        $rawData = $r->only(['address']);

        $address = Address::create($rawData);

        return $address;
    }
}
