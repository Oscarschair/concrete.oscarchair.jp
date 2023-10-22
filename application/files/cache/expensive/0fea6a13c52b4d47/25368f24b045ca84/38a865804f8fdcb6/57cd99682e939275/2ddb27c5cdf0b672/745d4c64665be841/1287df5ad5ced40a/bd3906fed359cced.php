<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\itemcategory$item][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T15:04:58+09:00 */



$loaded = true;
$expiration = 1698213898;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Item',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'categories',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardItemID',
     'referencedColumnName' => 'boardItemID',
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
