<?php
// function how_much_i_love_you(int $nb_petals): string {
//     if ($nb_petals > 6) $nb_petals = $nb_petals - 6;
//     switch ($nb_petals) {
//         case 1:
//             return "I love you";
//         case 2:
//             return "a little";
//         case 3:
//             return "a lot";
//         case 4:
//             return "passionately";
//         case 5:
//             return "madly";
//         case 6:
//             return "not at all";
//     }
// }

function how_much_i_love_you(int $nb_petals): string {
    $phrases = ["not at all", "I love you", "a little", "a lot", "passionately", "madly"];
    return $phrases[$nb_petals % 6];
}

// ("I love you", how_much_i_love_you(7));
var_dump(how_much_i_love_you(7)); 
// ("a lot", how_much_i_love_you(3));
var_dump(how_much_i_love_you(3)); 
// ("not at all", how_much_i_love_you(6));
var_dump(how_much_i_love_you(6)); 