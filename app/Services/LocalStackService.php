<?php
namespace App\Services;

use App\Models\LocalStack;
use App\Providers\LocalStackServiceInterface;

class LocalStackService implements LocalStackServiceInterface
{
    public function sendMessage()
    {
        return 'message';
    }
}
