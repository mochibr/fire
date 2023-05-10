<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Tic Tac Toe</title>
    <style>
      .board {
        display: flex;
        flex-wrap: wrap;
        width: 300px;
        height: 300px;
      }
      .square {
        box-sizing: border-box;
        border: 1px solid black;
        width: 100px;
        height: 100px;
        font-size: 50px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
      }
      .x {
        color: blue;
      }
      .o {
        color: red;
      }
    </style>
  </head>
  <body>
    <h1>Tic Tac Toe</h1>
    <div class="board"></div>
    <script>
      const board = document.querySelector(".board");
      const squares = [];
      let currentPlayer = "x";

      for (let i = 0; i < 9; i++) {
        const square = document.createElement("div");
        square.classList.add("square");
        square.addEventListener("click", () => {
          if (square.textContent === "") {
            square.textContent = currentPlayer;
            square.classList.add(currentPlayer);
            currentPlayer = currentPlayer === "x" ? "o" : "x";
          }
        });
        squares.push(square);
        board.appendChild(square);
      }
    </script>
  </body>
</html> -->

<!-- <div class="container">
  <h1>Tic Tac Toe</h1>
  <div class="board">
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
  </div>
  <button class="reset">Reset</button>
</div>
<style>
  .container {
  text-align: center;
}

.board {
  display: inline-block;
}

.square {
  width: 50px;
  height: 50px;
  border: 2px solid black;
  display: inline-block;
  margin: 5px;
}

.x {
  background-color: blue;
}

.o {
  background-color: red;
}

.win {
  border-color: green;
}

</style>
<script>
  const squares = document.querySelectorAll('.square');
const resetButton = document.querySelector('.reset');

let xTurn = true;
let gameOver = false;

const winningCombos = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6]
];

function handleClick(e) {
  const square = e.target;
  
  if (square.classList.contains('x') || square.classList.contains('o') || gameOver) {
    return;
  }
  
  square.classList.add(xTurn ? 'x' : 'o');
  
  if (checkForWin()) {
    endGame(false);
  } else if (checkForDraw()) {
    endGame(true);
  } else {
    xTurn = !xTurn;
  }
}

function checkForWin() {
  return winningCombos.some(combo => {
    return combo.every(index => {
      return squares[index].classList.contains(xTurn ? 'x' : 'o');
    });
  });
}

function checkForDraw() {
  return [...squares].every(square => {
    return square.classList.contains('x') || square.classList.contains('o');
  });
}

function endGame(draw) {
  gameOver = true;
  
  if (draw) {
    document.body.classList.add('draw');
  } else {
    document.body.classList.add(xTurn ? 'xWin' : 'oWin');
    highlightWinningCombo();
  }
}

function highlightWinningCombo() {
  winningCombos.forEach(combo => {
    const [a, b, c] = combo;
    
    if (squares[a].classList.contains(xTurn ? 'x' : 'o') && squares[b].classList.contains(xTurn ? 'x' : 'o') && squares[c].classList.contains(xTurn ? 'x' : 'o')) {
      squares[a].classList.add('win');
      squares[b].classList.add('win');
      squares[c].classList.add('win');
    }
  });
}

</script> -->
<div class="container">
<div id="board">
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
  <div class="square"></div>
</div>
<div class="players">
  <h3>Active Player:</h3>
  <ul>
    <li class="player-x active">X</li>
    <li class="player-o">O</li>
  </ul>
</div>
<button id="reset">New Game</button>
</div>
<style>
  div#board {
    display: flex;
    flex-wrap: wrap;
    width: 300px;
    height: 300px;
  }
  .square {
    font-weight: bold;
    line-height: 100px;
    box-sizing: border-box;
    border: 1px solid black;
    width: 100px;
    height: 100px;
    font-size: 50px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }

  .x {
    color: red;
  }

  .o {
    color: blue;
  }

  .winner {
    background-color: yellow;
  }

  .players {
    margin-top: 20px;
    text-align: center;
  }

  .players h3 {
    margin: 0 0 10px;
  }

  .players ul {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    justify-content: center;
  }

  .players li {
    font-size: 36px;
    margin: 0 10px;
    cursor: pointer;
  }

  .players li.active {
    text-decoration: underline;
  }
</style>

<script>
  const board = document.querySelector("#board");

  for (let i = 0; i < 9; i++) {
    const square = document.createElement("div");
    square.classList.add("square");
    board.appendChild(square);
  }

  const squares = document.querySelectorAll(".square");
  const playerX = document.querySelector(".player-x");
  const playerO = document.querySelector(".player-o");
  const resetButton = document.querySelector("#reset");
  let currentPlayer = "X";
  let winner = null;

  function handleClick(e) {
    if (winner !== null) {
      return;
    }

    if (e.target.textContent === "") {
      e.target.textContent = currentPlayer;
      e.target.classList.add(currentPlayer.toLowerCase());

      if (checkForWinner()) {
        winner = currentPlayer;
        // document.querySelector("#board").classList.add("winner");
      } else if (checkForTie()) {
        winner = "Tie";
      } else {
        currentPlayer = currentPlayer === "X" ? "O" : "X";
        playerX.classList.toggle("active");
        playerO.classList.toggle("active");
      }
    }
  }

  function checkForWinner() {
    const winningCombos = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8],
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8],
      [0, 4, 8],
      [2, 4, 6],
    ];

    for (let combo of winningCombos) {
      if (
        squares[combo[0]].textContent === currentPlayer &&
        squares[combo[1]].textContent === currentPlayer &&
        squares[combo[2]].textContent === currentPlayer
      ) {
        squares[combo[0]].classList.add("winner");
        squares[combo[1]].classList.add("winner");
        squares[combo[2]].classList.add("winner");
        return true;
      }
    }

    return false;
  }

  function checkForTie() {
    let filledSquares = 0;

    for (let square of squares) {
      if (square.textContent !== "") {
        filledSquares++;
      }
    }

    if (filledSquares === squares.length) {
      return true;
    } else {
      return false;
    }
  }

  function resetGame() {
    for (let square of squares) {
      square.textContent = "";
      square.classList.remove("x", "o", "winner");
    }

    document.querySelector("#board").classList.remove("winner");
    playerX.classList.add("active");
    playerO.classList.remove("active");
    currentPlayer = "X";
    winner = null;
  }

  for (let square of squares) {
    square.addEventListener("click", handleClick);
  }

  resetButton.addEventListener("click", resetGame);
</script>
