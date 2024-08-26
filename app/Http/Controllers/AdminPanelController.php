<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{


    public function carousel_items_list() {

        return view('admin_panel.carousel_items_list');
    }
}
