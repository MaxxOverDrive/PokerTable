<?php

  $suits = array(
    "Spades", "Hearts", "Clubs", "Diamonds"
  );

  $faces = array(
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
  );

  $deck = array();

  foreach($suits as $suit) {
    foreach($faces as $face) {
      $deck[] = array("face"=>$face, "suit"=>$suit);
    }
  }

  shuffle($deck);

  $card = array_shift($deck);

  echo $card['face'] . ' of ' . $card['suit'];

?>
