<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\permission\sitegroup][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T02:16:31+09:00 */



$loaded = true;
$expiration = 1698167791;

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
     'name' => 'PermissionAccessEntitySiteGroups',
     'schema' => NULL,
     'indexes' => 
    array (
      0 => 
      Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'peID',
         'columns' => 
        array (
          0 => 'peID',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
      1 => 
      Doctrine\ORM\Mapping\Index::__set_state(array(
         'name' => 'siteGID',
         'columns' => 
        array (
          0 => 'siteGID',
        ),
         'fields' => NULL,
         'flags' => NULL,
         'options' => NULL,
      )),
    ),
     'uniqueConstraints' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
