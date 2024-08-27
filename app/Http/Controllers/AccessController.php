<?php

namespace App\Http\Controllers;

use App\Services\AccessService;
use Illuminate\Http\Request;

class AccessController extends Controller {

    protected $accessService;
    public function __construct(AccessService $accessService) {
        $this->accessService = $accessService;
    }

    public function auth(Request $request) {
        $validatedData = $request->validate([
            'usuario' => 'required|string|max:255',
            'senha' => 'required|string|max:255'
        ]);

        if ($this->accessService->auth($validatedData)) {
            return redirect('/');
        } 
        return redirect('/login');
    }
}