<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\value\value\topicsvalue$topics][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T06:02:07+09:00 */



$loaded = true;
$expiration = 1698181327;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'value',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\Value\\Value\\SelectedTopic',
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
     'name' => 'avID',
     'referencedColumnName' => 'avID',
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
