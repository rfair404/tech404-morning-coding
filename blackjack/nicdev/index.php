<?php

require 'Blackjack.php';

$game = new \nicdev\Blackjack;

$game->addDecks(5);
$game->dealHands(2);

foreach($game->hands as $player => $hand) {
  echo "<p>{$player} [{$hand[0]}] [{$hand[1]}]</p>";
}