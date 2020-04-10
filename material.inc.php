<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * MintWorksBG implementation : © Brian Gregg <baritonehands@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * MintWorksBG game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */


/*

Example:

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/

$this->vertical_card_names = array(
    'co-op' => 'production',
    'corp-hq' => 'production',
    'stripmine' => 'production',
    'plant' => 'production',
    'truck' => 'utility',
    'landfill' => 'utility',
    'obelisk' => 'utility',
    'vault' => 'utility',
    'windmill' => 'culture',
    'museum' => 'culture',
    'gallery' => 'culture',
    'rachel' => 'ai',
    'sonic' => 'ai',
    'mint-works' => 'back',
    'mine' => 'production',
    'workshop' => 'production',
    'factory' => 'production',
    'wholesaler' => 'deed',
    'crane' => 'utility',
    'lotto' => 'deed',
    'assembler' => 'utility',
    'bridge' => 'culture',
    'statue' => 'culture',
    'gardens' => 'culture',
    'justin' => 'ai',
    'mort' => 'ai',
);

$this->plan_card_desc = array();
foreach ($this->vertical_card_names as $name => $type) {
    $this->plan_card_desc[$name] = array('name' => clienttranslate($name),
                                        'nametr' => self::_($name),
                                        'type' => $type);
}
