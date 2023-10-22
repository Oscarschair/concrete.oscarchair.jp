<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item$categories][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T06:35:51+09:00 */



$loaded = true;
$expiration = 1698183351;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'item',
     'targetEntity' => 'ItemCategory',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'EXTRA_LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
