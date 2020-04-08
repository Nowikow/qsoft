function countBasket($basket) {
  
  $count = 0;
  
  foreach ($basket as $el) {
      
      if ($el) {
              
          $count++;
              
      } else {
              
          continue;
      }
    }
  
  return $count;

};

echo countBasket($basket);
