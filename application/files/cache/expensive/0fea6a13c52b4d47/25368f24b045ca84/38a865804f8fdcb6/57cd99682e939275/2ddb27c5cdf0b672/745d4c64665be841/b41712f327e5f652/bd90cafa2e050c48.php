<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\datasource\configuration\configuration$data_source][1]/ */
/* Type: array */
/* Expiration: 2023-10-24T23:52:46+09:00 */



$loaded = true;
$expiration = 1698159166;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToOne::__set_state(array(
     'targetEntity' => 'Concrete\\Core\\Entity\\Board\\DataSource\\ConfiguredDataSource',
     'mappedBy' => NULL,
     'inversedBy' => 'configuration',
     'cascade' => 
    array (
      0 => 'persist',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
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
