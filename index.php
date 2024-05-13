<?php

echo "hello world";

require 'vendor/autoload.php';

use Aws\S3\S3Client;

$s3 = new S3Client([
    'region' => 'us_east_1',
    'version' => 'latest',
    'credentials' => [
        'key'    => 'your_access_key',
        'secret' => 'your_secret_key',
    ],
]);

$result = $s3->listBuckets();

foreach ($result['Buckets'] as $bucket) {
    echo $bucket['Name'] . PHP_EOL;
}

?>
