<?php
namespace Application\Job;
use \Concrete\Core\Job\Job as AbstractJob;

class GetGa4Statistics extends AbstractJob
{

    public function getJobName()
    {
        return t("Get Ga4 Statistics.");
    }

    public function getJobDescription()
    {
        return t("Get detailed statistics from GA4 and summarizes.");
    }

    public function run()
    {
        return t('processed');
    }
}