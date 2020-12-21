<?php

namespace Owowagency\LaravelMedia\Rules;

class IsBase64Type extends BaseTypeRule
{
    /**
     * Checks if base64 is image.
     *
     * @param  string  $mimeType
     * @return bool
     */
    protected function validateType(string $mimeType): bool
    {
        $exploded = explode('/', $mimeType);

        return ($exploded[0] == $this->type);
    }
}
