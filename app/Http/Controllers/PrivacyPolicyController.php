<?php

namespace App\Http\Controllers;

use App\Jatayu;
use App\Pradnya;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class PrivacyPolicyController extends Controller
{
    /**
     * Show the terms of service for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $policyFile = Jatayu::localizedMarkdownPath('policy.md');

        return view('auth.terms.policy', [
            'policy' => Str::markdown(file_get_contents($policyFile)),
        ]);
    }
}
