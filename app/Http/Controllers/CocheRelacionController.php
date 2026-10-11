<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tcoches;

class CocheRelacionController extends Controller
{
    public function index()
    {
        // 1. Coches que SÍ tienen extras (relación N:M usando whereHas)
        $cochesConExtras = tcoches::has('extras')->get();

        // 2. Coches que NO tienen extras (usando doesntHave)
        $cochesSinExtras = tcoches::doesntHave('extras')->get();

        // 3. Retornamos una vista pasando estos datos (compact los empaqueta)
        return view('consultar_coches', compact('cochesConExtras', 'cochesSinExtras'));
    }
}
