<?php

namespace App\Enums;

enum UserType: string
{
    case EMPLOYER = 'employer';

    case EMPLOYEE = 'employee';
}