<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\oauth\refreshtoken$accesstoken][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T11:35:03+09:00 */



$loaded = true;
$expiration = 1698201303;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'AccessToken',
     'mappedBy' => NULL,
     'inversedBy' => NULL,
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'accessToken',
     'referencedColumnName' => 'identifier',
     'unique' => false,
     'nullable' => true,
     'onDelete' => 'SET NULL',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
