<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\sitegroup$group][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T01:04:42+09:00 */



$loaded = true;
$expiration = 1698163482;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => '\\Concrete\\Core\\Entity\\Site\\Group\\Group',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'site_groups',
  )),
  1 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'siteGID',
     'referencedColumnName' => 'siteGID',
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
