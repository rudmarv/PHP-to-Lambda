<?php

echo "hello world";

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

// Create an S3 client
$s3 = new S3Client([
    'version' => '2006-03-01',
    'region'  => 'us-east-1', // Change to your desired region
]);

try {
    // List S3 buckets
    $buckets = $s3->listBuckets();

    // Display bucket names
    echo "<h2>Amazon S3 Buckets:</h2>";
    foreach ($buckets['Buckets'] as $bucket) {
        echo $bucket['Name'] . "<br>";
    }
} catch (AwsException $e) {
    // Display error message if any
    echo "Error: " . $e->getAwsErrorMessage();
}

?>
