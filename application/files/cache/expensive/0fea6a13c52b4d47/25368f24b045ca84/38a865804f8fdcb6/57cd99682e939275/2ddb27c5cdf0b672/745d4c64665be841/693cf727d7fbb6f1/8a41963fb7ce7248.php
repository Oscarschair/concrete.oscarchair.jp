<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\setkey$set][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T10:47:12+09:00 */



$loaded = true;
$expiration = 1698198432;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Set',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'keys',
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'asID',
     'referencedColumnName' => 'asID',
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
