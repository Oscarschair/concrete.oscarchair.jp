<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\designer\itemselectorcustomelement$items][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T03:35:06+09:00 */



$loaded = true;
$expiration = 1698172506;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'element',
     'targetEntity' => 'ItemSelectorCustomElementItem',
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
