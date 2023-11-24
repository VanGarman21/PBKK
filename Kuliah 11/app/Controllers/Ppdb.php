<?php

namespace App\Controllers;

class Ppdb extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function pendaftaran(): string
    {
        return view('v_pendaftaran');
    }
}
