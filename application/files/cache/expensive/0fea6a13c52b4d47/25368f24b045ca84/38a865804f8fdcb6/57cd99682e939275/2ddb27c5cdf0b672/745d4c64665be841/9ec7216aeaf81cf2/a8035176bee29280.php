<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\file\downloadstatistics$downloaddatetime][1]/ */
/* Type: array */
/* Expiration: 2023-10-24T21:10:52+09:00 */



$loaded = true;
$expiration = 1698149452;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\Column::__set_state(array(
     'name' => 'timestamp',
     'type' => 'datetime_immutable',
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
      'comment' => 'Date/time when the file has been downloaded',
    ),
     'columnDefinition' => 'TIMESTAMP DEFAULT current_timestamp',
     'generated' => NULL,
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1697782165;
