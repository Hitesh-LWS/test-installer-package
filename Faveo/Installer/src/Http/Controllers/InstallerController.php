<?php

namespace Faveo\Installer\Http\Controllers;

use App\Http\Controllers\Controller;
use Faveo\Installer\Models\InstallerModel;
use Illuminate\Http\Request;

class InstallerController extends Controller
{

    public function index()
    {
        return view('installer::contact');
    }

    public function sendMail(Request $request)
    {
        InstallerModel::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);;
    }

}
