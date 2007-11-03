<?php

/**
 * Data file for Pacific/Nauru timezone, compiled from the olson data.
 *
 * Auto-generated by the phing olson task on 11/03/2007 17:31:56
 *
 * @package    agavi
 * @subpackage translation
 *
 * @copyright  Authors
 * @copyright  The Agavi Project
 *
 * @since      0.11.0
 *
 * @version    $Id$
 */

return array (
  'types' => 
  array (
    0 => 
    array (
      'rawOffset' => 41400,
      'dstOffset' => 0,
      'name' => 'NRT',
    ),
    1 => 
    array (
      'rawOffset' => 32400,
      'dstOffset' => 0,
      'name' => 'JST',
    ),
    2 => 
    array (
      'rawOffset' => 43200,
      'dstOffset' => 0,
      'name' => 'NRT',
    ),
  ),
  'rules' => 
  array (
    0 => 
    array (
      'time' => -1545131260,
      'type' => 0,
    ),
    1 => 
    array (
      'time' => -877347000,
      'type' => 1,
    ),
    2 => 
    array (
      'time' => -800960400,
      'type' => 0,
    ),
    3 => 
    array (
      'time' => 294323400,
      'type' => 2,
    ),
  ),
  'finalRule' => 
  array (
    'type' => 'static',
    'name' => 'NRT',
    'offset' => 43200,
    'startYear' => 1980,
  ),
  'name' => 'Pacific/Nauru',
);

?>