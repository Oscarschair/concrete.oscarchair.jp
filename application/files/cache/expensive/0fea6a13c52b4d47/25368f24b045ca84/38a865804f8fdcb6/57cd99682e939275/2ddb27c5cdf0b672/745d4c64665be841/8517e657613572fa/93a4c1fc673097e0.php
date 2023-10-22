<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\item$tags][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T08:52:16+09:00 */



$loaded = true;
$expiration = 1698191536;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'item',
     'targetEntity' => 'ItemTag',
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
