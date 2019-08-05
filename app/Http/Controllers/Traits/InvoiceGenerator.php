<?php

namespace App\Http\Controllers\Traits;


use ConsoleTVs\Invoices\Classes\Invoice;

class InvoiceGenerator extends Invoice
{

    public $taxData = null;
    public $discount = null;
    public $total = null;

    public function __construct($name = 'Invoice')
    {
        parent::__construct();
    }

    public function addTaxData($taxData)
    {
        $this->taxData = $taxData;
        return $this;
    }

    public function addDiscountData($coupon)
    {
        $this->discount = $coupon;
        return $this;
    }

    public function addTotal($total)
    {
        $this->total = $total;
        return $this;
    }


}