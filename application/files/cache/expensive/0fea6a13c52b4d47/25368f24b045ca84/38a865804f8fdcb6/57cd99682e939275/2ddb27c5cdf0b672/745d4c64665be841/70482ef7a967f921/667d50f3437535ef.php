<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\board\designer\customelement][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T00:43:46+09:00 */



$loaded = true;
$expiration = 1698162226;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Entity::__set_state(array(
     'repositoryClass' => NULL,
     'readOnly' => false,
  )),
  1 => 
  Doctrine\ORM\Mapping\Table::__set_state(array(
     'name' => 'BoardDesignerCustomElements',
     'schema' => NULL,
     'indexes' => NULL,
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
  2 => 
  Doctrine\ORM\Mapping\InheritanceType::__set_state(array(
     'value' => 'SINGLE_TABLE',
  )),
  3 => 
  Doctrine\ORM\Mapping\DiscriminatorColumn::__set_state(array(
     'name' => 'type',
     'type' => 'string',
     'length' => NULL,
     'columnDefinition' => NULL,
     'enumType' => NULL,
  )),
  4 => 
  Doctrine\ORM\Mapping\DiscriminatorMap::__set_state(array(
     'value' => 
    array (
      'itemSelector' => 'ItemSelectorCustomElement',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
