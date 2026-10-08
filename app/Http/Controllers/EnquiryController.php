<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Store a newly created enquiry in storage.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['nullable', 'email', 'max:255'],
            'product_type' => ['nullable', 'string', 'max:100'],
            'bottle_size' => ['nullable', 'string', 'max:50'],
            'sector' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $enquiry = Enquiry::create([
            ...$validated,
            'ip_address' => $request->ip(),
            'status' => 'new',
        ]);

        $message = 'Thank you! Your enquiry has been received. Our team will contact you shortly.';

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $message,
                'enquiry_id' => $enquiry->id,
            ]);
        }

        return back()->with('success', $message);
    }
}
