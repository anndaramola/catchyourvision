<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Pariwo\Resources\Repositories\ResourceRepository;

class RegistrationCodeRepository extends ResourceRepository
{
    public function prepData(array $data, Request $request = null): array
    {
        return $data;
    }

    public function getRequiredValues(): array
    {
        return [];
    }

    public function getMissingValueMessages(): array
    {
        return [];
    }
}
