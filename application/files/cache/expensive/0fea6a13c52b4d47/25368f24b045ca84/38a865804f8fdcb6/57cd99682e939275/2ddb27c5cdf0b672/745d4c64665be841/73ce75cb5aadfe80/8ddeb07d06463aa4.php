<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\ipaccesscontrolrange$ipaccesscontrolrangeid][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T08:38:45+09:00 */



$loaded = true;
$expiration = 1698190725;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Column::__set_state(array(
     'name' => 'iacrID',
     'type' => 'integer',
     'length' => NULL,
     'precision' => NULL,
     'scale' => NULL,
     'unique' => false,
     'nullable' => false,
     'insertable' => true,
     'updatable' => true,
     'enumType' => NULL,
     'options' => 
    array (
      'unsigned' => true,
      'comment' => 'The IP Access Control Range identifier',
    ),
     'columnDefinition' => NULL,
     'generated' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  2 => 
  Doctrine\ORM\Mapping\GeneratedValue::__set_state(array(
     'strategy' => 'AUTO',
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
