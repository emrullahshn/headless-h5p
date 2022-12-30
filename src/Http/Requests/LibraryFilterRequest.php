<?php

namespace Alsay\LaravelH5P\Http\Requests;

use Alsay\LaravelH5P\Exceptions\H5PException;
use Illuminate\Foundation\Http\FormRequest;

class LibraryFilterRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function getLibraryParameters()
    {
        $libraryParameters = json_decode($this->get('libraryParameters'));
        if (!$libraryParameters) {
            abort(422, H5PException::NO_LIBRARY_PARAMETERS);
        }

        return $libraryParameters;
    }
}