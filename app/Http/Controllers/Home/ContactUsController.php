<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Home\Contact\StoreRequest;
use App\Models\Home\Contact;
use Illuminate\Http\RedirectResponse;

class ContactUsController extends Controller
{
    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Contact::query()->create($data);
        return back()->with('success', 'Your message created successfully');
    }
}
