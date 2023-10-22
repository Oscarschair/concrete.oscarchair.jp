<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instance$batches][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T07:43:23+09:00 */



$loaded = true;
$expiration = 1698187403;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'instance',
     'targetEntity' => 'InstanceItemBatch',
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
