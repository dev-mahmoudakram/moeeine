<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function login(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin.contacts');
        }

        return view('admin.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt($credentials, remember: true)) {
            return back()->withErrors(['email' => __('auth.failed')])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('admin.contacts');
    }

    public function contacts(Request $request): View
    {
        $status = $request->query('status');

        $contacts = ContactRequest::query()
            ->when($status, fn ($q) => $q->where('status', $status))
            ->latest()
            ->paginate(20);

        $counts = [
            'all'  => ContactRequest::count(),
            'new'  => ContactRequest::where('status', 'new')->count(),
            'read' => ContactRequest::where('status', 'read')->count(),
            'done' => ContactRequest::where('status', 'done')->count(),
        ];

        return view('admin.contacts', compact('contacts', 'counts', 'status'));
    }

    public function updateStatus(Request $request, ContactRequest $contact): RedirectResponse
    {
        $request->validate(['status' => 'required|in:new,read,done']);
        $contact->update(['status' => $request->status]);

        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
