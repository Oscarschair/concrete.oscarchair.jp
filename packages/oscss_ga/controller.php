<?php
namespace Concrete\Package\OscssGa;
use Concrete\Core\Package\Package;
use Concrete\Core\Command\Task\Manager as TaskManager;
require_once __DIR__ . '/src/GaDataController.php';
use Concrete\Package\OscssGa\Src\GaDataController;


class Controller extends Package
{
    protected $appVersionRequired = '9.0';
    protected $pkgVersion = '0.1.6';
    protected $pkgHandle = 'oscss_ga';
    
    public function getPackageName()
    {
        return t("Get Ga4 Statistics.");
    }

    public function getPackageDescription()
    {
        return t("Get detailed statistics from GA4 and summarizes.");
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installContentFile('tasks.xml');
    }
    
    public function upgrade()
    {
        $pkg = parent::upgrade();
        $this->installContentFile('tasks.xml');
    }

    public function on_start()
    {
        $manager = $this->app->make(TaskManager::class);
        $manager->extend('ga_data', function () {
            return new GaDataController();
        });
        $manager->extend('get_statics_from_ga', function () {
            return new GaDataController();
        });
    }
}