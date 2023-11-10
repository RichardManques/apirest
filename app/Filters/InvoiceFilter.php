<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;
class InvoiceFilter extends ApiFilter{

    protected $safeParams = [
        'costumerId' => ['eq'],
        'amount' => ['eq','gt','gte','lt','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','gt','gte','lt','lte'],
        'paidDate' => ['eq','gt','gte','lt','lte'],

    ];
    
    protected $columnMap = [
        'costumerId' => 'costumer_id',
        'billedDate' => 'billed_dated',
        'paidDate' => 'paid_dated'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

}