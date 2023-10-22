<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceslot$instance][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T07:52:41+09:00 */



$loaded = true;
$expiration = 1698187961;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Instance',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'slots',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'boardInstanceID',
     'referencedColumnName' => 'boardInstanceID',
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
