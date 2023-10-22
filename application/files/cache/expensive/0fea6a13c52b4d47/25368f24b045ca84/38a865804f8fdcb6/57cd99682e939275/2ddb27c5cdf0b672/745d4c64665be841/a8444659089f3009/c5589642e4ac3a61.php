<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configureddatasource$items][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T04:32:26+09:00 */



$loaded = true;
$expiration = 1698175946;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'data_source',
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\InstanceItem',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
