<?php

namespace App\Http\Controllers;

use App\Vocabulary;
use Illuminate\Http\Request;

class dictionaryController extends Controller
{
    public function translate(Request $request)
    {
        $en = $request->vocab;
        $vocabs = Vocabulary::all();
        foreach ($vocabs as $vocab) {
            if ($vocab['en'] == $en) {
                echo $vocab['vi'];
            }
        }
    }
}
