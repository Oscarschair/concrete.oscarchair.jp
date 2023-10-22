<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\oauth\authcode$client][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T03:30:46+09:00 */



$loaded = true;
$expiration = 1698172246;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Client',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'client',
     'referencedColumnName' => 'identifier',
     'unique' => false,
     'nullable' => true,
     'onDelete' => NULL,
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
