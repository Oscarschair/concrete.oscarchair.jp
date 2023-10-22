<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\association$controls][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T10:20:16+09:00 */



$loaded = true;
$expiration = 1698196816;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'association',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Express\\Control\\AssociationControl',
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
