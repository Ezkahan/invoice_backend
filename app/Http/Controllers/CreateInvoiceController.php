<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateInvoiceRequest;

class CreateInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateInvoiceRequest $request)
    {
        $customer = Customer::find($request->customer_id);

        if (!$customer) {
            return response()->json([
                'message' => 'customer not found',
            ]);
        }

        $usersCount = Customer::usersCount();
    }
}
