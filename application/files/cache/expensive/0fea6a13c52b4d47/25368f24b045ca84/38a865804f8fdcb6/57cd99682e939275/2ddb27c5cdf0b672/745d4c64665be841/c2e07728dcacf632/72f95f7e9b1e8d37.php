<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\value\value\selectvalueoption$list][1]/ */
/* Type: array */
/* Expiration: 2023-10-24T21:55:34+09:00 */



$loaded = true;
$expiration = 1698152134;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'SelectValueOptionList',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'options',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'avSelectOptionListID',
     'referencedColumnName' => 'avSelectOptionListID',
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
