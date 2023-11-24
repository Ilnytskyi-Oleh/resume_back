<?php

namespace App\Http\Controllers\API\V1\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\Employee\UpdateRequest;
use App\Http\Resources\Employee\EmployeeResource;
use App\Models\Employee;

class DeleteController extends Controller
{
    public function __invoke(Employee $employee)
    {
        $employee->delete();

        $employeeCount = Employee::count();

        if ($employeeCount <= 10) {
            \Artisan::call('migrate:fresh --seed');
        }

        return response()->json();
    }
}
