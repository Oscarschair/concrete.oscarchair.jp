<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\category$types][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T09:51:05+09:00 */



$loaded = true;
$expiration = 1698195065;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToMany::__set_state(array(
     'targetEntity' => 'Type',
     'mappedBy' => NULL,
     'inversedBy' => 'categories',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinTable::__set_state(array(
     'name' => 'AttributeTypeCategories',
     'schema' => NULL,
     'joinColumns' => 
    array (
      0 => 
      Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
         'name' => 'akCategoryID',
         'referencedColumnName' => 'akCategoryID',
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
     'inverseJoinColumns' => 
    array (
      0 => 
      Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
         'name' => 'atID',
         'referencedColumnName' => 'atID',
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
