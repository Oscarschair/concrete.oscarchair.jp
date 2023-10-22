<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\site\skeleton$locales][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T10:37:05+09:00 */



$loaded = true;
$expiration = 1698197825;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'skeleton',
     'targetEntity' => 'SkeletonLocale',
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
     'name' => 'siteSkeletonLocaleID',
     'referencedColumnName' => 'siteSkeletonLocaleID',
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
