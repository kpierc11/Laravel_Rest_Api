<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MythicSwords extends Controller
{
    public function getSwords() {
        $swords = DB::table('mythic_swords')->get();

        foreach($swords as $sword) {
            echo json_encode($sword);
        }
    }

    public function getSword($name) {
        $sword = DB::table('mythic_swords')->get()->where('name', $name);

       
            echo json_encode($sword);
    }

}
