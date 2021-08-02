<?php
  // Change player location
function changeLocation() {	
  global $location;
  
  echo "Where do you want to go?\n";
  $new_loc = strtolower(readline(">> "));

  if ($location === "kitchen" && $new_loc === "bathroom") {
    echo "You go to: $new_loc.\n";
    $location = $new_loc;
  } elseif ($location === "kitchen" && $new_loc === "woods") {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location = $new_loc;
  } elseif ($location === "bathroom" && $new_loc === "kitchen") {
    echo "You go to: $new_loc.\n";
    $location = $new_loc;
  } elseif ($location === "woods" && $new_loc === "kitchen") {
    echo "You go to: $new_loc.\n";
    $location = $new_loc;
  } elseif ($new_loc === "woods" || $new_loc === "kitchen"|| $new_loc === "bathroom") {
         echo "You can't go directly to $new_loc. Try going somewhere else first.\n";
      } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
      }

}