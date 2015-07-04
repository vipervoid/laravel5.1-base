<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExpensesController extends Controller
{
    public function index()
    {
    	return view('expenses.index');
    }

    public function add()
    {

    }

    public function create(Request $request)
    {
    	
    }

    public function edit(Request $request, $id)
    {

    }

    public function update(Request $request, $id)
    {

    }
}
