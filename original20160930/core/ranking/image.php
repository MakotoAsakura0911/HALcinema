<?php
   function rank($movie_id) {
     if (file_exists("core/ranking/img/rank/$movie_id.jpg")) {
     $rank_name = $movie_id;
     }
     else $rank_name = 'noimage';
     return '<img src="img/rank/' . $rank_name . '.jpg" alt="" width="100" height="100">';
   }

 ?>