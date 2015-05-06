<?php

namespace nicdev;

class Blackjack {

    protected $deck = ['2S', '3S', '4S', '5S', '6S', '7S', '8S', '9S', '10S', 'JS', 'QS', 'KS', 'AC', '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', '10C', 'JC', 'QC', 'KC', 'AC', 'AD', '2D', '3D', '4D', '5D', '6D', '7D', '8D', '9D', '10D', 'JD', 'QD', 'KD', 'AD', 'AH', '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H', '10H', 'JH', 'QH', 'KH', 'AH' ];

    protected $shoe;
    public $hands;

    // Default show contains only one deck

    public function __construct() {

      $this->shoe = $this->deck;

    }

    // Shuffles deck in the shoe

    protected function shuffleDeck() {

      shuffle($this->shoe);

    }  
    
    // Adds decks to the shoe

    public function addDecks($num_decks) {
      
      for($i = 0; $i < $num_decks; $i++) {

        $this->shoe = array_merge($this->shoe, $this->deck);

      }

    }

    // Deal hands to number of $players. Dealer already accounted for

    public function dealHands($players) {

      $this->shuffleDeck();

      $pairs = array_chunk($this->shoe, 2);
      
      $this->hands['dealer'] = $pairs[0];

      for($i = 1; $i <= $players; $i++) {
        
        $this->hands['Player ' . $i] = $pairs[$i];

      }
    
    }

}
