<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ChatGptIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $id = null): Response
    {
        return Inertia::render('Chat/ChatIndex');
    }
}
