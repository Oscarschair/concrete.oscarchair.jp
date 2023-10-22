<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\designer\itemselectorcustomelementitem$element][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T12:55:34+09:00 */



$loaded = true;
$expiration = 1698206134;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'ItemSelectorCustomElement',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'items',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'customElementID',
     'referencedColumnName' => 'id',
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
