<?php
namespace Ekpono\Inspire\Controllers;

use Illuminate\Http\Request;
use Ekpono\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {

        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}