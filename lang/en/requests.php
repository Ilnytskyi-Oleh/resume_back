<?php

return [
    'name' => [
        'required' => "The name is required",
        'max' => "Maximum character limit for name is 100",
        'min' => "Minimum character limit for name is 2",
        'is_obscene' => "Calm down!",
    ],

    'age' => [
        'required' => "Age is required",
        'min' => "Age must be greater than 18",
        'max' => "Age must be less than 150",
    ],
    'salary' => [
        'required' => "Salary is required",
        'min' => "Salary must be at least 1",
    ],
    'experience' => [
        'min' => 'Experience must be greater than or equal to 0'
    ],
    'sex' => [
        'required' => 'Gender must be specified',
        'boolean' => 'Gender must be a boolean value',
    ],
    'perPage' => [
        'numeric' => 'Value must be numeric',
        'gt' => 'Value must be greater than 0',
    ]
];
