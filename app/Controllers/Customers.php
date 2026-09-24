<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        // findAll() uses CodeIgniter Query Builder to retrieve every database row.
        return view('customers/index', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customerModel->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}
