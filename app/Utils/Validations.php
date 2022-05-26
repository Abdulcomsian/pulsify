<?php


namespace App\Utils;


use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class Validations
{
    public static function storeSpecialty($request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required'],
        ]);
    }
}
