<?php  
namespace Concrete\Package\GetGa4Report;

defined('C5_EXECUTE') or die("Access Denied.");

use \Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'get_ga4_report';
    protected $appVersionRequired = '8.5.1';
    protected $pkgVersion = '0.6';

    public function getPackageDescription()
    {
        return t('Adds the Dreamrs theme to your website.');
    }

    public function getPackageName()
    {
        return t('GetGa4Report');
    }

    public function install()
    {
        $pkg = parent::install();
        // Our custom package installation code will go here.
    }

    public function upgrade()
    {
        parent::upgrade();
        // Our custom package upgrade code will go here.
    }
}
