<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\instanceitem$data_source][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T01:57:53+09:00 */



$loaded = true;
$expiration = 1698166673;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\ConfiguredDataSource',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'items',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'configuredDataSourceID',
     'referencedColumnName' => 'configuredDataSourceID',
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
