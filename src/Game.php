<?php
    class Game
    {
        function play($player1, $player2)
        {
            if($player1 == "Rock" && $player2 == "Scissors") {
                $winner = "Player 1";
            } elseif ($player1 == "Paper" && $player2 == "Rock") {
                $winner = "Player 1";
            } elseif ($player1 == "Scissors" && $player2 == "Paper") {
                $winner = "Player 1";
            } elseif ($player2 == "Rock" && $player1 == "Scissors") {
                $winner = "Player 2";
            } elseif ($player2 == "Paper" && $player1 == "Rock") {
                $winner = "Player 2";
            } elseif ($player2 == "Scissors" && $player1 == "Paper") {
                $winner = "Player 2";
            } elseif ($player1 == "" || $player2 == "") {
                $winner = "None";
            } else {
                $winner = "Draw";
            }
            return $winner;
        }
    }
?>
