<?php
$dbms = 'mssql';
$dbhost = 'localhost';
$dbport = '';
$dbname = 'Discover';
$dbuser = 'Discover';
$dbpasswd = 'vKpSZvR98Si6Wv2HM5N';
$customerguid='ABCD1234';
$debugmode = 0;
$syspath = '/home/site/wwwroot/';

# Blob storage for Azure.

$accesskey = 'uvZk9W7tpyXdQPUzzU0nKl6RrTLwZ6JGMd5a2VF9Zbqynpb91r1Y+0eNTR5eOxUXjsW5BgqQcohdjHYqCxNpVw==';
$storageAccount = 'sadiscoverstorage';
$iconstore="https://sadiscover.blob.core.windows.net/img/";

# JWT
 
$apikeyseed = 'fdVw38cpvY7eS72b1t4e';
$iss = 'http://example.org';
$aud = 'http://example.com';
$iat = 1356999524;
$nbf = 1357000000;

# Settings for the assets, report and systems cards

$intcutlen=40; # Number of characters to cut from the description fields.

# Developermode settings. 
# Beware, there will be dragons here!

$allowlocalrun=1; # Allow code to login even without Microsoft Federation services present (i.e. no Office365 accounts). Very dangerous.

?>