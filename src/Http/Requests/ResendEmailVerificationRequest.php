<?php

namespace Tec\Api\Http\Requests;

use Tec\Support\Http\Requests\Request;

class ResendEmailVerificationRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|email|string',
        ];
    }
}
