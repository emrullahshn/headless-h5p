<?php

namespace Alsay\LaravelH5P\Http\Requests;

use Alsay\LaravelH5P\Models\H5PContent;
use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Uuid;

class ContentReadRequest extends FormRequest
{
    public function authorize(): bool
    {
        $this->getH5PContent();

        return true;
    }

    public function rules(): array
    {
        return [];
    }

    public function getH5PContent(): H5PContent
    {
        $uuid = $this->route('uuid');

        if (!Uuid::isValid($uuid)) {
            abort(422, "Invalid uuid parameter");
        }

        return H5PContent::whereUuid($this->route('uuid'))->firstOrFail();
    }
}
