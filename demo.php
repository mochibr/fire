<!DOCTYPE html>
<html>
<head>
  <style>
    body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
  font-family: Arial, sans-serif;
}

#snake {
  background-color: #000f23;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  padding: 20px;
  max-width: 600px;
}

#play {
  text-align: center;
  margin-bottom: 20px;
}

h1 {
  font-size: 48px;
  color: #fff;
  margin-top: 0;
}

#playButton {
  font-size: 24px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#playButton:hover {
  background-color: #45a049;
}

#playing {
  display: flex;
  flex-direction: column;
  align-items: center;
}

#playing_head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 10px 20px;
  background-color: #000f23;
}

#scoreElement,
#highScoreElement {
  font-size: 24px;
  color: #fff;
  margin: 0;
}

#playing_body {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #000f23;
  padding: 20px;
}

#gameCanvas {
  border: 1px solid #ccc;
  border-radius: 5px;
}

#playing_footer {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

#pauseButton,
#playAgainButton {
  font-size: 18px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-right: 10px;
}

#pauseButton:hover,
#playAgainButton:hover {
  background-color: #45a049;
}

  </style>
  <!-- <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    #snake {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    #play {
      text-align: center;
      margin-bottom: 20px;
      width: 400px;
    }

    #play p {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
      color: #333;
    }

    #playButton {
      font-size: 18px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #playButton:hover {
      background-color: #45a049;
    }

    #playing {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #gameCanvas {
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    #playAgainButton,
    #pauseButton {
      font-size: 18px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #playAgainButton:hover,
    #playAgainButton:hover {
      background-color: #45a049;
    }
  </style> -->
</head>
<body>
  <div id="snake">
    <div id="play">
      <p>Snake Game</p>
      <button id="playButton">Play</button>
    </div>
    <div id="playing" style="display: none;">
      <div id="playing_head">
        <div id="scoreElement"></div>
        <div id="highScoreElement"></div>
      </div>
      <div id="playing_body">
        <canvas id="gameCanvas" width="400" height="400"></canvas>
      </div>
      <div id="playing_footer">
        <button id="pauseButton">Pause</button>
        <button id="playAgainButton" style="display: none">Play Again</button>
      </div>
    </div>
  </div>
</body>
</html>



    <script>
      // Game constants
      const canvas = document.getElementById("gameCanvas");
      const ctx = canvas.getContext("2d");
      const boxSize = 20;
      const canvasSize = canvas.width / boxSize;
      let score = 0;
      let highScore = 0;
      let gameLoop;

      // Snake initial position and direction
      let snake = [{ x: 10, y: 10 }];
      let direction = "right";

      // Food initial position
      let food = {
        x: Math.floor(Math.random() * canvasSize),
        y: Math.floor(Math.random() * canvasSize),
      };

      // Main game loop
      function game() {
        gameLoop = setInterval(() => {
          clearCanvas();
          drawFood();
          moveSnake();
          drawSnake();
          updateHighScore();

          if (isCollision()) {
            gameOver();
            clearInterval(gameLoop);
          }
        }, 100);
      }

      // Function to clear the canvas
      function clearCanvas() {
        ctx.fillStyle = "#000f23";
        // ctx.fillStyle = "black";
        ctx.fillRect(0, 0, canvas.width, canvas.height);
      }

      function drawSnake() {
        snake.forEach((segment, index) => {
          if (index === 0) {
            // Draw head with rounded corners
            ctx.fillStyle = "lime";
            const x = segment.x * boxSize;
            const y = segment.y * boxSize;
            const radius = boxSize / 2;
            ctx.beginPath();

            if (direction === "left") {
              ctx.moveTo(x + radius, y);
              ctx.arcTo(x, y, x, y + radius, radius);
              ctx.arcTo(x, y + boxSize, x + radius, y + boxSize, radius);
              ctx.lineTo(x + boxSize, y + boxSize);
              ctx.lineTo(x + boxSize, y);
            } else if (direction === "right") {
              ctx.moveTo(x + boxSize - radius, y);
              ctx.arcTo(x + boxSize, y, x + boxSize, y + radius, radius);
              ctx.arcTo(
                x + boxSize,
                y + boxSize,
                x + boxSize - radius,
                y + boxSize,
                radius
              );
              ctx.lineTo(x, y + boxSize);
              ctx.lineTo(x, y);
            } else if (direction === "up") {
              ctx.moveTo(x, y + radius);
              ctx.arcTo(x, y, x + radius, y, radius);
              ctx.arcTo(x + boxSize, y, x + boxSize, y + radius, radius);
              ctx.lineTo(x + boxSize, y + boxSize);
              ctx.lineTo(x, y + boxSize);
            } else if (direction === "down") {
              ctx.moveTo(x, y + boxSize - radius);
              ctx.arcTo(x, y + boxSize, x + radius, y + boxSize, radius);
              ctx.arcTo(
                x + boxSize,
                y + boxSize,
                x + boxSize,
                y + boxSize - radius,
                radius
              );
              ctx.lineTo(x + boxSize, y);
              ctx.lineTo(x, y);
            }

            ctx.closePath();
            ctx.fill();
          } else {
            // Draw body segments
            ctx.fillStyle = "lime";
            ctx.fillRect(
              segment.x * boxSize,
              segment.y * boxSize,
              boxSize,
              boxSize
            );
          }
        });
      }

      function moveSnake() {
        const head = { x: snake[0].x, y: snake[0].y };

        if (direction === "right") {
          head.x++;
        } else if (direction === "left") {
          head.x--;
        } else if (direction === "up") {
          head.y--;
        } else if (direction === "down") {
          head.y++;
        }

        // Wrap snake around the canvas edges
        if (head.x >= canvasSize) head.x = 0;
        if (head.x < 0) head.x = canvasSize - 1;
        if (head.y >= canvasSize) head.y = 0;
        if (head.y < 0) head.y = canvasSize - 1;

        snake.unshift(head);

        if (head.x === food.x && head.y === food.y) {
          score++;
          updateScore();
          generateFood();
        } else {
          snake.pop();
        }
      }

      // Function to draw the food
      function drawFood() {
        ctx.fillStyle = "red";
        const x = food.x * boxSize + boxSize / 2;
        const y = food.y * boxSize + boxSize / 2;
        const radius = boxSize / 2;
        ctx.beginPath();
        ctx.arc(x, y, radius, 0, 2 * Math.PI);
        ctx.closePath();
        ctx.fill();
      }

      // Function to generate new food
      function generateFood() {
        food = {
          x: Math.floor(Math.random() * canvasSize),
          y: Math.floor(Math.random() * canvasSize),
        };

        // Make sure food doesn't overlap with snake
        if (
          snake.find((segment) => segment.x === food.x && segment.y === food.y)
        ) {
          generateFood();
        }
      }

      // Function to check for collisions
      function isCollision() {
        const head = snake[0];

        // Check collision with walls
        if (
          head.x < 0 ||
          head.x >= canvasSize ||
          head.y < 0 ||
          head.y >= canvasSize
        ) {
          return true;
        }

        // Check collision with self
        for (let i = 1; i < snake.length; i++) {
          if (head.x === snake[i].x && head.y === snake[i].y) {
            return true;
          }
        }

        return false;
      }

      // Function to update the score
      function updateScore() {
        scoreElement.innerHTML = "Score: " + score;
      }

    // Function to update the high score
    function updateHighScore() {
      const highScore = localStorage.getItem("highScore");
      if (highScore === null || score > highScore) {
        localStorage.setItem("highScore", score);
      }
      highScoreElement.innerHTML = "High Score: " + highScore;
    }
      

      // Function to end the game
      function gameOver() {
        ctx.fillStyle = "white";
        ctx.font = "40px Arial";
        const text = "Game Over";
        const textWidth = ctx.measureText(text).width;
        const textX = canvas.width / 2 - textWidth / 2;
        const textY = canvas.height / 2;
        ctx.fillText(text, textX, textY);
        playAgainButton.style.display = "block";
      }

      // Function to start the game
      function startGame() {
        playButton.style.display = "none";
        playing.style.display = "block";
        playAgainButton.style.display = "none";
        score = 0;
        updateScore();
        updateHighScore();
        snake = [{ x: 10, y: 10 }];
        direction = "right";
        generateFood();
        game();
      }

      // Event listener for arrow key presses
      document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowUp" && direction !== "down") {
          direction = "up";
        } else if (e.key === "ArrowDown" && direction !== "up") {
          direction = "down";
        } else if (e.key === "ArrowRight" && direction !== "left") {
          direction = "right";
        } else if (e.key === "ArrowLeft" && direction !== "right") {
          direction = "left";
        }
      });

      // Declare a variable to track the pause state
      let isPaused = false;

      // Function to handle the pause functionality
      function togglePause() {
        if (isPaused) {
          // Resume the game
          gameLoop = setInterval(() => {
            clearCanvas();
            drawFood();
            moveSnake();
            drawSnake();
            updateHighScore();

            if (isCollision()) {
              gameOver();
              clearInterval(gameLoop);
            }
          }, 100);
          pauseButton.innerHTML = "Pause";
        } else {
          // Pause the game
          clearInterval(gameLoop);
          pauseButton.innerHTML = "Resume";
        }
        isPaused = !isPaused;
      }

      // Event listener for pause button click
      const pauseButton = document.getElementById("pauseButton");
      pauseButton.addEventListener("click", togglePause);


      // Event listener for play button click
      const playButton = document.getElementById("playButton");
      playButton.addEventListener("click", startGame);

      // Event listener for play again button click
      const playAgainButton = document.getElementById("playAgainButton");
      playAgainButton.addEventListener("click", startGame);
    </script>
  </body>
</html>
