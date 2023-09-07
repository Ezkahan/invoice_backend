<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Http\Resources\InvoiceResource;

class GetInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Invoice $invoice)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $data = Invoice::whereDateBetween('started_at', $start_date, 'ended_at', $end_date)->get();

        // this is not completed task (  sorry
        return InvoiceResource::make($data);
    }
}
