<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $service;

    public function __construct(ContactService $contactService)
    {
        $this->service = $contactService;
    }

    public function store(Request $request)
    {
        return $this->service->createItem($request);
    }
}
