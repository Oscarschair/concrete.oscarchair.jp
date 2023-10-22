<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\page\container\instance$instanceareas][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T14:17:10+09:00 */



$loaded = true;
$expiration = 1698211030;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceArea',
     'cascade' => 
    array (
      0 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
