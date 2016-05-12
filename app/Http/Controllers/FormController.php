<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Lists;
use DB;

class FormController extends BaseController
{
	function addForm()
    {
    	$listName = $_POST['lname'];
    	$description = $_POST['description'];
    	$list = Lists::create(['listName' => $listName, 'description' => $description]);

		return view('layouts.TaskList');
    }

    function viewForm()
    {
		return view('layouts.TaskList');
    }

    function editForm()
    {
		return view('layouts.TaskList');
    }

    function deleteForm()
    {
		return view('layouts.TaskList');
    }
}
