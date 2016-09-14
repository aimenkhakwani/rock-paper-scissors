<?php
    require_once 'src/Game.php';

    class GameTest extends PHPUnit_Framework_TestCase
    {
        function test_play_rock1()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Rock';
            $input_second = 'Scissors';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_play_paper1()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Paper';
            $input_second = 'Rock';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_play_scissors1()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Scissors';
            $input_second = 'Paper';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_play_rock2()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Scissors';
            $input_second = 'Rock';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_play_paper2()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Rock';
            $input_second = 'Paper';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_play_scissors2()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Paper';
            $input_second = 'Scissors';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Player 2", $result);
        }

        function test_play_draw()
        {
            // Arrange
            $test_Game = new Game;
            $input_first = 'Paper';
            $input_second = 'Paper';

            // Act
            $result = $test_Game->play($input_first,$input_second);

            // Assert
            $this->assertEquals("Draw", $result);
        }
    }
?>
