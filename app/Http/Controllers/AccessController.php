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
            $request->session()->regenerate();
            return redirect('/');
        } 
        return redirect('/login');
    }

    public function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function isLogged():bool {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['id'])) {
            return true;
        }
        return false;
    }
}