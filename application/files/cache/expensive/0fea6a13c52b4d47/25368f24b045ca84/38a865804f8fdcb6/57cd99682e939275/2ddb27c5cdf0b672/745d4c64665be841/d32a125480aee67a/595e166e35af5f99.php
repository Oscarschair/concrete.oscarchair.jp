<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitembatch$items][1]/ */
/* Type: array */
/* Expiration: 2023-10-24T21:48:35+09:00 */



$loaded = true;
$expiration = 1698151715;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'batch',
     'targetEntity' => 'InstanceItem',
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
