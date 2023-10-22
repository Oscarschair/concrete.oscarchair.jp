<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entity$attributes][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T08:22:47+09:00 */



$loaded = true;
$expiration = 1698189767;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entity',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Key\\ExpressKey',
     'cascade' => 
    array (
      0 => 'persist',
      1 => 'remove',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
