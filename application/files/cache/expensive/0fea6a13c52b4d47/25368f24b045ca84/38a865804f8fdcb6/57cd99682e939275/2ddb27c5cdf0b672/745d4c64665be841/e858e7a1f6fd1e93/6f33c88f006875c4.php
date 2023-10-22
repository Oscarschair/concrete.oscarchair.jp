<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\oauth\scope$clients][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T10:51:39+09:00 */



$loaded = true;
$expiration = 1698198699;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Client',
     'mappedBy' => 'scopes',
     'inversedBy' => NULL,
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
