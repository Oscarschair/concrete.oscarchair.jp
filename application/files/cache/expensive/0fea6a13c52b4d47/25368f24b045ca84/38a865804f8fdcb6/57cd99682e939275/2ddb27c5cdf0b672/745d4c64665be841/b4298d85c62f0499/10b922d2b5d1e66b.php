<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\oauth\client$scopes][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T03:49:57+09:00 */



$loaded = true;
$expiration = 1698173397;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Scope',
     'mappedBy' => NULL,
     'inversedBy' => 'clients',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinTable::__set_state(array(
     'name' => 'OAuth2ClientScopes',
     'schema' => NULL,
     'joinColumns' => 
    array (
      0 => 
      Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
         'name' => 'clientIdentifier',
         'referencedColumnName' => 'identifier',
         'unique' => false,
         'nullable' => true,
         'onDelete' => 'CASCADE',
         'columnDefinition' => NULL,
         'fieldName' => NULL,
         'options' => 
        array (
        ),
      )),
    ),
     'inverseJoinColumns' => 
    array (
      0 => 
      Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
         'name' => 'scopeIdentifier',
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
    ),
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
