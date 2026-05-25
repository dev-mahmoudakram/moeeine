<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        ContactRequest::create([
            'name'          => $request->name,
            'phone'         => $request->phone,
            'service_type'  => $request->service_type,
            'city'          => $request->city,
            'expected_date' => $request->date ?: null,
            'notes'         => $request->notes,
            'locale'        => app()->getLocale(),
        ]);

        return back()
            ->with('contact_success', __('site.contact.success'))
            ->withFragment('contact');
    }
}
