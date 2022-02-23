<?php

namespace App\Http\Controllers;

use App\Jatayu;
use App\Pradnya;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class TermsOfServiceController extends Controller
{
    /**
     * Show the privacy policy for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $termsFile = Jatayu::localizedMarkdownPath('terms.md');

        return view('auth.terms.terms', [
            'terms' => Str::markdown(file_get_contents($termsFile)),
        ]);
    }
}
