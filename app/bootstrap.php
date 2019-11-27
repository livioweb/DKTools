<?php
use Zend\Config\Factory;
use Zend\ServiceManager\ServiceManager;

// Setup/verify autoloading
if (file_exists($a = __DIR__ . '/../../../autoload.php')) {
    require $a;
} elseif (file_exists($a = __DIR__ . '/../vendor/autoload.php')) {
    require $a;
} elseif (file_exists($a = __DIR__ . '/../autoload.php')) {
    require $a;
} else {
    fwrite(STDERR, 'Cannot locate autoloader; please run "composer install"' . PHP_EOL);
    exit(1);
}

#TODO = Precisa ser refatorado
$pwd = shell_exec("pwd");
list($path1,$path2,$path3,$path4,$path5) = explode("/",$pwd,5);

if(trim($path5)=="public"){
    // Modules Settings
$modulesConfig = Factory::fromFiles(glob('/var/www/html/app/code/*/*/etc/*.*'), true);
$globalConfig =Factory::fromFiles(glob('/var/www/html/app/etc/*.*'), true);

}else{
    // Modules Settings
$modulesConfig = Factory::fromFiles(glob('app/code/*/*/etc/*.*'), true);
$globalConfig =Factory::fromFiles(glob('app/etc/*.*'), true);

}
#TODO = Precisa ser refatorado /

// // Modules Settings
// $modulesConfig = Factory::fromFiles(glob($pwd.'app/code/*/*/etc/*.*'), true);
// //var_dump($modulesConfig);
// // Global Settings
// $globalConfig =Factory::fromFiles(glob($pwd.'app/etc/*.*'), true);
// //var_dump($globalConfig);

$configMerged = $modulesConfig->merge($globalConfig)->toArray();
//var_dump($configMerged);

$serviceManager = new ServiceManager();
$serviceManager->configure($configMerged['dependencies']);
$serviceManager->setService('config', $configMerged);
return $serviceManager;
