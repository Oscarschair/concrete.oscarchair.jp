<?php
namespace Concrete\Package\OscssGa;
use Concrete\Core\Package\Package;
use Concrete\Core\Command\Task\Manager as TaskManager;
use Concrete\Package\OscssGa\GaDataController;


class Controller extends Package
{
    protected $appVersionRequired = '9.0';
    protected $pkgVersion = '0.1.4';
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
        parent::install();
        $this->installContentFile('tasks.xml');
    }
    
    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile('tasks.xml');
    }

    public function on_start()
    {
        $manager = $this->app->make(TaskManager::class);
        $manager->extend('ga_data', function () {
            return new GaDataController();
        });
    }
}