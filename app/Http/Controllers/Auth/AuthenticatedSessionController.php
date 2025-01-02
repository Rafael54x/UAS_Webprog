<?php

// app/Http/Controllers/Auth/AuthenticatedSessionController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        // Generate CAPTCHA
        $captcha = Str::random(8);
        
        // Store CAPTCHA in session
        Session::put('captcha', $captcha);

        // Pass CAPTCHA to the view
        return view('auth.login', compact('captcha'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validate the input, including CAPTCHA
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
            'captcha' => 'required|string|in:' . Session::get('captcha'), // Compare with session stored CAPTCHA
        ]);

        // If validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // If validation passes, attempt login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Remove CAPTCHA from session after login attempt
            Session::forget('captcha');
            
            // Redirect to the intended page (e.g., dashboard)
            return redirect()->intended(route('admin.dashboard'));
        }

        // If authentication fails
        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
