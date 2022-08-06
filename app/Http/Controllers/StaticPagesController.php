<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function showAboutUsPage()
    {
        return view('pages.about-us');
    }

    public function showPrivacyPolicyPage()
    {
        return view('pages.privacy-policy');
    }

    public function showTermAndConditionsPage()
    {
        return view('pages.terms-conditions');
    }

    public function showFAQSPage()
    {
        return view('pages.faqs');
    }

    public function showPaperWeightPage()
    {
        return view('pages.paper-weight');
    }
}
