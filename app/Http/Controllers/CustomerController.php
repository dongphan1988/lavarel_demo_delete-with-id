<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function showCustomers(){
        return view('list');
    }

    function deleteCustomer($id){
        return view('delete', compact('id'));
    }

    function destroy(Request $request){
        $getid = $request->id;
        return view('destroy', compact('getid'));
    }
}
