<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Education;
use App\Models\Skill;
use Illuminate\Http\Request;

/**
 * Class SkillController
 * @package App\Http\Controllers
 */
class FrontEndController extends Controller
{

    public function obtener_datos(){
        $habilidades = Skill::all();
        $certificados = Certificate::all();
        $educacion = Education::all();
        return view('welcome', ['habilidades'=>$habilidades, 'certificados'=>$certificados]);
    }



}
