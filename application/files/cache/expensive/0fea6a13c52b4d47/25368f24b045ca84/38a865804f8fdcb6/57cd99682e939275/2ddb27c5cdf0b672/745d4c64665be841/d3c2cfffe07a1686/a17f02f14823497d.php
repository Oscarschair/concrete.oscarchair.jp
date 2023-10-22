<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\tasksettask$set][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T07:35:36+09:00 */



$loaded = true;
$expiration = 1698186936;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Automation\\TaskSet',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'tasks',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
