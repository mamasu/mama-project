<?php

define('MMF_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

try {
    set_error_handler(function($errno, $errstr, $errfile, $errline) {
        //Change to log error in production error_log
        throw new Exception('Error Level: '.$errno.
                            ' Error message: '.$errstr.
                            ' Error file: '.$errfile.
                            ' Error line: '.$errline, 1);
    });

    //Set error var to zero
    $error = 0;

    //Create the autoloader with the route base of the files
    $autoloader = new Mmf\Autoloader\Autoloader(array(), dirname(__DIR__));

    //Include the config path
    //$autoloader->addNewAutoloadPath('/mmf/parameter');

    //Create the new Config
    $config          = new Mmf\Parameter\Config;

    //Create the new Communication
    $communication   = new Mmf\IO\CommunicationHttp();

    //Create the new FrontController and pass the autoloader
    $frontController = new Mmf\Controller\FrontController($autoloader, $config, $communication);

    $config->addConfigVars(dirname(__DIR__) . '/config/config.ini');

    //Execute the Main Function
    $mainAction      = $frontController->main();

    //Check if there is and error
    $error     = $frontController->executionErrors;
    $errorText = $frontController->messageErrors;

} catch (\Exception $e) {
    var_dump($e);
    //Set error var to one
    $error = 1;
    $errorText = $e->getTraceAsString();
    //Include the error default page in case of general errors.
    include (__DIR__ . '/../app/views/errors/error_page.html');
}
