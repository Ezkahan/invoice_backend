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
    public function __invoke(Invoice $invoice)
    {
        return InvoiceResource::make($invoice);
    }
}
