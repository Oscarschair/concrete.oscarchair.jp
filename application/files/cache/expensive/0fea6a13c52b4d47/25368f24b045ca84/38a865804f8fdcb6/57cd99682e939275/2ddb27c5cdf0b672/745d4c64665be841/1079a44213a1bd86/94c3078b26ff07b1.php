<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\express\entry$attributes][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T11:59:13+09:00 */



$loaded = true;
$expiration = 1698202753;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'entry',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Value\\ExpressValue',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'exEntryID',
     'referencedColumnName' => 'exEntryID',
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
