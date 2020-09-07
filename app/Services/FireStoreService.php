<?php

namespace App\Services;

use App\Models\FireStore;
use Kreait\Firebase\Factory;

class FireStoreService implements FireStoreServiceInterface
{
    public function sendMessage()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__ . '/taiyokenki-test-firebase-adminsdk-j8sgr-5871da389c.json')
        ->withDatabaseUri('https://taiyokenki-test.firebaseio.com/');
        $database = $factory->createDatabase();
        $reference = $database->getReference();
        $value = $reference->getValue();
        return $value;
    }
}
