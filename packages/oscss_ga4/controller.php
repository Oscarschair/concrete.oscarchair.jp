<?php
namespace Concrete\Package\OscssGa4;
use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'oscss_ga4';
    protected $appVersionRequired = '9.0';
    protected $pkgVersion = '1.0';
    

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
        /**
         * Nothing here yet.
         */
    }
    
}