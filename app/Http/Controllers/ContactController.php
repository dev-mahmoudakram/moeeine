<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactRequestReceived;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $contact = ContactRequest::create([
            'name'          => $request->name,
            'phone'         => $request->phone,
            'service_type'  => $request->service_type,
            'city'          => $request->city,
            'expected_date' => $request->date ?: null,
            'notes'         => $request->notes,
            'locale'        => app()->getLocale(),
        ]);

        $notifyEmail = config('mail.contact_notify');
        if ($notifyEmail) {
            Mail::to($notifyEmail)->send(new ContactRequestReceived($contact));
        }

        return back()
            ->with('contact_success', __('site.contact.success'))
            ->withFragment('contact');
    }
}
