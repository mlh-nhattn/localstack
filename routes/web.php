<?php

use Illuminate\Support\Facades\Route;

use Aws\Sqs\SqsClient; 
use Aws\Exception\AwsException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('send_sqs', function(){

    $queueName = "http://localstack_demo:4576/000000000000/nhat_6666";
    
    $client = new SqsClient([
        'profile' => 'default',
        'region' => 'us-east-1',
        'version' => '2012-11-05',
        'credentials' => [
            'key'    => 'AKIAJG7VBGTAGBQ3TKKA',
            'secret' => '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',
        ],
    ]);
    
    $params = [
        'DelaySeconds' => 10,
        'MessageAttributes' => [
            "Title" => [
                'DataType' => "String",
                'StringValue' => "The Hitchhiker's Guide to the Galaxy"
            ],
            "Author" => [
                'DataType' => "String",
                'StringValue' => "Douglas Adams."
            ],
            "WeeksOn" => [
                'DataType' => "Number",
                'StringValue' => "6"
            ]
        ],
        'MessageBody' => "Information about current NY Times fiction bestseller for week of 12/11/2016.",
        'QueueUrl' => $queueName
    ];
    
    try {
        $result = $client->sendMessage($params);
        var_dump($result);
    } catch (AwsException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
});

// Receive message
Route::get('receive_sqs', function(){

    $queueUrl = "http://localstack_demo:4576/000000000000/nhat_6666";
    
    $client = new SqsClient([
        'profile' => 'default',
        'region' => 'us-east-1',
        'version' => '2012-11-05',
        'credentials' => [
            'key'    => 'AKIAJG7VBGTAGBQ3TKKA',
            'secret' => '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',
        ],
    ]);
    
    try {
        $result = $client->receiveMessage(array(
            'AttributeNames' => ['SentTimestamp'],
            'MaxNumberOfMessages' => 1,
            'MessageAttributeNames' => ['All'],
            'QueueUrl' => $queueUrl, // REQUIRED
            'WaitTimeSeconds' => 0,
        ));
        if (!empty($result->get('Messages'))) {
            var_dump($result->get('Messages')[0]);
            $result = $client->deleteMessage([
                'QueueUrl' => $queueUrl, // REQUIRED
                'ReceiptHandle' => $result->get('Messages')[0]['ReceiptHandle'] // REQUIRED
            ]);
        } else {
            echo "No messages in queue. \n";
        }
    } catch (AwsException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
});
