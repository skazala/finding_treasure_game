<?php
function eatSoup(){
	global $has_soup, $is_hungry;
  if (!$has_soup) {
    echo "You don't have any cooked food to eat!\n";
  } else {
    echo "You have eaten the soup!\n";
    $is_hungry = FALSE;
    $has_soup = FALSE;
  }
}