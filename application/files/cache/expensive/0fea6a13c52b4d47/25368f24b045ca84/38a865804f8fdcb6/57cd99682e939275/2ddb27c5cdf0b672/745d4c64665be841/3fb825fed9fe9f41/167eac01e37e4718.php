<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\image\thumbnail\type\typefileset$ftfsthumbnailtype][1]/ */
/* Type: array */
/* Expiration: 2023-10-25T01:43:59+09:00 */



$loaded = true;
$expiration = 1698165839;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Id::__set_state(array(
  )),
  1 => 
  Doctrine\ORM\Mapping\ManyToOne::__set_state(array(
     'targetEntity' => 'Type',
     'cascade' => NULL,
     'fetch' => 'LAZY',
     'inversedBy' => 'ftAssociatedFileSets',
  )),
  2 => 
  Doctrine\ORM\Mapping\JoinColumn::__set_state(array(
     'name' => 'ftfsThumbnailType',
     'referencedColumnName' => 'ftTypeID',
     'unique' => false,
     'nullable' => false,
     'onDelete' => 'CASCADE',
     'columnDefinition' => NULL,
     'fieldName' => NULL,
     'options' => 
    array (
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
