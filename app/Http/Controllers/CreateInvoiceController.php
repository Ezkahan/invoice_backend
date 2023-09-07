<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateInvoiceRequest;
use App\Models\Invoice;
use App\Models\Customer;

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

        $invoice = Invoice::create([
            'started_at' => $request->started_at,
            'ended_at' => $request->ended_at,
            'customer_id' => $request->customer_id,
            'user_count' => $customer->userCount(),
            'amount_of_events' => $customer->invoiceCount(),
            'total_price' => $customer->totalOfPrice(),
        ]);

        return $invoice;
    }
}
