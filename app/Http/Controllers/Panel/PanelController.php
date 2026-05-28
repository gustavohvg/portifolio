<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    // classe somente para chamar views
    public function index() {
        return view('panel.index');
    }

    public function myAccount() {
        return view('panel.my-account.index');
    }
}
