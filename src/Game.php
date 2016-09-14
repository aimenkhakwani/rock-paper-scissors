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
            return array($winner, $player1, $player2);
        }

        function onePlayer($player)
        {
            $options = array('Rock', 'Paper', 'Scissors');
            $random = $options[rand(0,2)];

            if($player == "Rock" && $random == "Scissors") {
                $winner = "Player";
            } elseif ($player == "Paper" && $random == "Rock") {
                $winner = "Player";
            } elseif ($player == "Scissors" && $random == "Paper") {
                $winner = "Player";
            } elseif ($random == "Rock" && $player == "Scissors") {
                $winner = "Computer";
            } elseif ($random == "Paper" && $player == "Rock") {
                $winner = "Computer";
            } elseif ($random == "Scissors" && $player == "Paper") {
                $winner = "Computer";
            } elseif ($player == "") {
                $winner = "None";
            } else {
                $winner = "Draw";
            }
            return array($winner, $player, $random);
        }
    }
?>
