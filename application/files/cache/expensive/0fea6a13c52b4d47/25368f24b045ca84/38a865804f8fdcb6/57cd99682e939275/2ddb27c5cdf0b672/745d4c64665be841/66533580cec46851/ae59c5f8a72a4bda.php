<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\automation\taskset$tasks][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T00:11:28+09:00 */



$loaded = true;
$expiration = 1698160288;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'set',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Automation\\TaskSetTask',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'displayOrder' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
