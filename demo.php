<!-- <!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" readonly>
    <div class="buttons">
      <button onclick="appendToDisplay('7')">7</button>
      <button onclick="appendToDisplay('8')">8</button>
      <button onclick="appendToDisplay('9')">9</button>
      <button onclick="appendToDisplay('+')">+</button>
      <button onclick="appendToDisplay('4')">4</button>
      <button onclick="appendToDisplay('5')">5</button>
      <button onclick="appendToDisplay('6')">6</button>
      <button onclick="appendToDisplay('-')">-</button>
      <button onclick="appendToDisplay('1')">1</button>
      <button onclick="appendToDisplay('2')">2</button>
      <button onclick="appendToDisplay('3')">3</button>
      <button onclick="appendToDisplay('*')">*</button>
      <button onclick="appendToDisplay('0')">0</button>
      <button onclick="appendToDisplay('.')">.</button>
      <button onclick="calculate()">=</button>
      <button onclick="appendToDisplay('/')">/</button>
      <button onclick="clearDisplay()">C</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<style>
  .calculator {
  width: 200px;
  margin: 0 auto;
  text-align: center;
}

#display {
  width: 100%;
  margin-bottom: 10px;
  padding: 5px;
}

.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
}

button {
  width: 100%;
  padding: 10px;
  font-size: 18px;
}

</style>
<script>
  function appendToDisplay(value) {
  document.getElementById('display').value += value;
}

function calculate() {
  var displayValue = document.getElementById('display').value;
  var result = eval(displayValue);
  document.getElementById('display').value = result;
}

function clearDisplay() {
  document.getElementById('display').value = '';
}

</script> -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Neon Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" readonly>
    <div class="buttons">
      <button onclick="appendToDisplay('7')">7</button>
      <button onclick="appendToDisplay('8')">8</button>
      <button onclick="appendToDisplay('9')">9</button>
      <button class="operator" onclick="appendToDisplay('+')">+</button>
      <button onclick="appendToDisplay('4')">4</button>
      <button onclick="appendToDisplay('5')">5</button>
      <button onclick="appendToDisplay('6')">6</button>
      <button class="operator" onclick="appendToDisplay('-')">-</button>
      <button onclick="appendToDisplay('1')">1</button>
      <button onclick="appendToDisplay('2')">2</button>
      <button onclick="appendToDisplay('3')">3</button>
      <button class="operator" onclick="appendToDisplay('*')">*</button>
      <button onclick="appendToDisplay('0')">0</button>
      <button onclick="appendToDisplay('.')">.</button>
      <button class="equal" onclick="calculate()">=</button>
      <button class="operator" onclick="appendToDisplay('/')">/</button>
      <button class="clear" onclick="clearDisplay()">C</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<style>
  .calculator {
  width: 200px;
  margin: 0 auto;
  text-align: center;
  font-family: 'Arial', sans-serif;
  background-color: #222;
  padding: 20px;
  border-radius: 10px;
}

#display {
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  font-size: 24px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  text-align: right;
}

.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
}

button {
  width: 100%;
  padding: 10px;
  font-size: 18px;
  border: none;
  background-color: #222;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #555;
}

button.operator {
  background-color: #FF00FF;
  color: #fff;
}

button.equal {
  background-color: #00FF00;
  color: #000;
}

button.clear {
  background-color: #FF0000;
  color: #fff;
}

</style> -->
<div class="calculator">
  <input type="text" id="result" disabled>
  <div class="buttons">
    <button onclick="clearResult()">C</button>
    <button onclick="appendValue('backspace')">&larr;</button>
    <button onclick="appendValue('%')">%</button>
    <button onclick="appendValue('/')">/</button>
    <button onclick="appendValue(7)">7</button>
    <button onclick="appendValue(8)">8</button>
    <button onclick="appendValue(9)">9</button>
    <button onclick="appendValue('*')">*</button>
    <button onclick="appendValue(4)">4</button>
    <button onclick="appendValue(5)">5</button>
    <button onclick="appendValue(6)">6</button>
    <button onclick="appendValue('-')">-</button>
    <button onclick="appendValue(1)">1</button>
    <button onclick="appendValue(2)">2</button>
    <button onclick="appendValue(3)">3</button>
    <button onclick="appendValue('+')">+</button>
    <button onclick="appendValue(0)">0</button>
    <button onclick="appendValue('.')">.</button>
    <button onclick="calculate()">=</button>
  </div>
</div>
<style>
  .calculator {
  width: 240px;
  margin: 0 auto;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

#result {
  width: 100%;
  margin-bottom: 10px;
  padding: 5px;
  font-size: 18px;
}

.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 5px;
}

button {
  padding: 10px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  background-color: #f2f2f2;
  cursor: pointer;
}

button:hover {
  background-color: #e0e0e0;
}

</style>
<script>
  function appendValue(value) {
  const resultField = document.getElementById('result');
  const currentValue = resultField.value;

  if (value === 'backspace') {
    resultField.value = currentValue.slice(0, -1);
  } else {
    resultField.value = currentValue + value;
  }
}

function calculate() {
  const resultField = document.getElementById('result');
  const expression = resultField.value;

  // Remove percentage sign and evaluate the expression
  const evaluatedResult = eval(expression.replace('%', '/100'));

  resultField.value = evaluatedResult;
}

function clearResult() {
  document.getElementById('result').value = '';
}

</script>
<!-- <div class="calculator">
  <div class="display">
    <input type="text" id="result" disabled>
  </div>
  <div class="buttons">
    <div class="row">
      <button onclick="clearResult()">C</button>
      <button onclick="backspace()">&#9003;</button>
      <button onclick="appendValue('/')">÷</button>
      <button onclick="appendValue('7')">7</button>
      <button onclick="appendValue('8')">8</button>
      <button onclick="appendValue('9')">9</button>
      <button onclick="appendValue('*')">x</button>
      <button onclick="appendValue('4')">4</button>
      <button onclick="appendValue('5')">5</button>
      <button onclick="appendValue('6')">6</button>
      <button onclick="appendValue('-')">-</button>
      <button onclick="appendValue('1')">1</button>
      <button onclick="appendValue('2')">2</button>
      <button onclick="appendValue('3')">3</button>
      <button onclick="appendValue('+')">+</button>
      <button onclick="appendValue('0')">0</button>
      <button onclick="appendValue('.')">.</button>
      <button onclick="calculate()">=</button>
    </div>
  </div>
</div>
<style>
  .calculator {
  width: 320px;
  margin: 0 auto;
  padding: 10px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.display {
  background-color: #fff;
  padding: 10px;
  text-align: right;
  border-radius: 5px;
  margin-bottom: 10px;
}

#result {
  width: 100%;
  border: none;
  font-size: 28px;
}

.buttons {
  background-color: #f5f5f5;
}

.row {
  display: flex;
}

button {
  flex: 1;
  padding: 20px;
  font-size: 18px;
  border: none;
  background-color: #e0e0e0;
  color: #000;
  cursor: pointer;
}

button:hover {
  background-color: #d2d2d2;
}

button:active {
  background-color: #c0c0c0;
}

</style>
<script>
  function appendValue(value) {
  document.getElementById('result').value += value;
}

function calculate() {
  const result = eval(document.getElementById('result').value);
  document.getElementById('result').value = result;
}

function clearResult() {
  document.getElementById('result').value = '';
}

function backspace() {
  const currentValue = document.getElementById('result').value;
  document.getElementById('result').value = currentValue.slice(0, -1);
}

</script> -->
<!-- <!DOCTYPE html>
<html>
<head>
  <title>3D Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="calculator">
    <div class="screen">
      <input type="text" id="display" readonly>
    </div>
    <div class="keys">
      <div class="row">
        <button class="btn" onclick="appendToDisplay('7')">7</button>
        <button class="btn" onclick="appendToDisplay('8')">8</button>
        <button class="btn" onclick="appendToDisplay('9')">9</button>
        <button class="btn operator" onclick="appendToDisplay('+')">+</button>
      </div>
      <div class="row">
        <button class="btn" onclick="appendToDisplay('4')">4</button>
        <button class="btn" onclick="appendToDisplay('5')">5</button>
        <button class="btn" onclick="appendToDisplay('6')">6</button>
        <button class="btn operator" onclick="appendToDisplay('-')">-</button>
      </div>
      <div class="row">
        <button class="btn" onclick="appendToDisplay('1')">1</button>
        <button class="btn" onclick="appendToDisplay('2')">2</button>
        <button class="btn" onclick="appendToDisplay('3')">3</button>
        <button class="btn operator" onclick="appendToDisplay('*')">*</button>
      </div>
      <div class="row">
        <button class="btn"  onclick="appendToDisplay('0')">0</button>
        <button class="btn"  onclick="appendToDisplay('.')">.</button>
        <button class="btn operator" onclick="appendToDisplay('/')">/</button>
        <button class="btn equal" onclick="calculate()">=</button>
      </div>
      <div class="row">
        <button class="btn clear" onclick="clearDisplay()">C</button>
      </div>
    </div>
  </div>
</body>
</html>
<style>
  .calculator {
    width: 320px;
    margin: 0 auto;
    background-color: #f1f1f1;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.screen {
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
  text-align: right;
  margin-bottom: 20px;
}

#display {
  width: 100%;
  border: none;
  font-size: 24px;
  padding: 5px;
  outline: none;
}

.keys {
  margin-top: 10px;
}

.row {
  display: flex;
  justify-content: space-between;
}

.btn {
  flex: 1;
  padding: 20px;
  margin: 5px;
  background-color: #eee;
  border-radius: 5px;
  font-size: 18px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #ddd;
}

.operator {
  background-color: #f39c12;
  color: #fff;
}

.equal {
  background-color: #27ae60;
  color: #fff;
}

.clear {
  background-color: #f44336;
  color: #fff;
}

</style>
<script>
  function appendToDisplay(value) {
  document.getElementById('display').value += value;
}

function calculate() {
  var displayValue = document.getElementById('display').value;
  var result = eval(displayValue);
  document.getElementById('display').value = result;
}

function clearDisplay() {
  document.getElementById('display').value = '';
}

</script> -->
<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="calculator">
    <div class="display">
      <input type="text" id="result" readonly>
    </div>
    <div class="keypad">
      <div class="row">
        <button onclick="appendToDisplay('7')">7</button>
        <button onclick="appendToDisplay('8')">8</button>
        <button onclick="appendToDisplay('9')">9</button>
        <button class="operator" onclick="appendToDisplay('+')">+</button>
      </div>
      <div class="row">
        <button onclick="appendToDisplay('4')">4</button>
        <button onclick="appendToDisplay('5')">5</button>
        <button onclick="appendToDisplay('6')">6</button>
        <button class="operator" onclick="appendToDisplay('-')">-</button>
      </div>
      <div class="row">
        <button onclick="appendToDisplay('1')">1</button>
        <button onclick="appendToDisplay('2')">2</button>
        <button onclick="appendToDisplay('3')">3</button>
        <button class="operator" onclick="appendToDisplay('*')">*</button>
      </div>
      <div class="row">
        <button onclick="appendToDisplay('0')">0</button>
        <button onclick="appendToDisplay('.')">.</button>
        <button class="operator" onclick="calculate()">=</button>
        <button class="operator" onclick="appendToDisplay('/')">/</button>
      </div>
      <div class="row">
        <button class="clear" onclick="clearDisplay()">C</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<style>
  .calculator {
  width: 320px;
  margin: 0 auto;
  background-color: #f1f1f1;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.display {
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
  text-align: right;
  margin-bottom: 20px;
}

#result {
  width: 100%;
  border: none;
  font-size: 24px;
  padding: 5px;
}

.keypad {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
}

.row {
  display: flex;
}

button {
  width: 100%;
  padding: 15px;
  font-size: 20px;
  text-align: center;
  border: none;
  background-color: #e0e0e0;
  color: #333;
  border-radius: 5px;
  cursor: pointer;
}

button.operator {
  background-color: #ff9800;
  color: #fff;
}

button.clear {
  background-color: #f44336;
  color: #fff;
}

button:hover {
  background-color: #ccc;
}

</style> -->

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" readonly>
    <div class="buttons">
      <div class="row">
        <button class="gray" onclick="appendToDisplay('7')">7</button>
        <button class="gray" onclick="appendToDisplay('8')">8</button>
        <button class="gray" onclick="appendToDisplay('9')">9</button>
        <button class="orange" onclick="appendToDisplay('+')">+</button>
      </div>
      <div class="row">
        <button class="gray" onclick="appendToDisplay('4')">4</button>
        <button class="gray" onclick="appendToDisplay('5')">5</button>
        <button class="gray" onclick="appendToDisplay('6')">6</button>
        <button class="orange" onclick="appendToDisplay('-')">-</button>
      </div>
      <div class="row">
        <button class="gray" onclick="appendToDisplay('1')">1</button>
        <button class="gray" onclick="appendToDisplay('2')">2</button>
        <button class="gray" onclick="appendToDisplay('3')">3</button>
        <button class="orange" onclick="appendToDisplay('*')">*</button>
      </div>
      <div class="row">
        <button class="gray zero" onclick="appendToDisplay('0')">0</button>
        <button class="gray" onclick="appendToDisplay('.')">.</button>
        <button class="orange" onclick="calculate()">=</button>
        <button class="orange" onclick="appendToDisplay('/')">/</button>
      </div>
      <div class="row">
        <button class="clear" onclick="clearDisplay()">C</button>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
<style>
  .calculator {
  width: 300px;
  margin: 0 auto;
  text-align: center;
  background-color: #f2f2f2;
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#display {
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  font-size: 24px;
  border: none;
  background-color: #fff;
  text-align: right;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
}

.row {
  display: flex;
}

button {
  flex: 1;
  padding: 20px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.gray {
  background-color: #f1f1f1;
  color: #333;
}

.orange {
  background-color: #ff9800;
  color: #fff;
}

.clear {
  background-color: #f44336;
  color: #fff;
}

.zero {
  flex-basis: calc(50% - 5px);
}

button:hover {
  opacity: 0.8;
}

</style> -->

<!-- <div class="calculator">
  <input type="text" class="display" disabled>
  <div class="keypad">
    <button class="btn">7</button>
    <button class="btn">8</button>
    <button class="btn">9</button>
    <button class="btn">+</button>
    <button class="btn">4</button>
    <button class="btn">5</button>
    <button class="btn">6</button>
    <button class="btn">-</button>
    <button class="btn">1</button>
    <button class="btn">2</button>
    <button class="btn">3</button>
    <button class="btn">*</button>
    <button class="btn">0</button>
    <button class="btn">.</button>
    <button class="btn">=</button>
    <button class="btn">/</button>
    <button class="btn clear">C</button>
  </div>
</div>

<style>
  .calculator {
  width: 200px;
  border: 1px solid #ccc;
  padding: 10px;
}

.display {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  font-size: 20px;
  text-align: right;
  padding: 5px;
}

.keypad {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 5px;
}

.btn {
  width: 100%;
  height: 40px;
  font-size: 18px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  cursor: pointer;
}

.clear {
  background-color: #ff0000;
  color: #fff;
}

</style> -->

<!-- <div class="calculator">
  <input type="text" id="result" readonly>
  <div class="buttons">
    <button class="operator">+</button>
    <button class="operator">-</button>
    <button class="operator">*</button>
    <button class="operator">/</button>
    <button>7</button>
    <button>8</button>
    <button>9</button>
    <button>4</button>
    <button>5</button>
    <button>6</button>
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>0</button>
    <button>.</button>
    <button id="clear">C</button>
    <button id="equal">=</button>
  </div>
</div>
<style>
  .calculator {
  width: 240px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

#result {
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  font-size: 20px;
}

.buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
}

button {
  width: 100%;
  padding: 10px;
  font-size: 18px;
  border-radius: 4px;
}

.operator {
  background-color: #ff9800;
  color: #fff;
}

</style> -->

<!-- <div class="calculator">
  <input type="text" id="result" readonly>
  
  <div class="row">
    <button class="operator">C</button>
    <button class="operator">/</button>
    <button>7</button>
    <button>8</button>
    <button>9</button>
    <button class="operator">*</button>
  </div>
  
  <div class="row">
    <button>4</button>
    <button>5</button>
    <button>6</button>
    <button class="operator">-</button>
  </div>
  
  <div class="row">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button class="operator">+</button>
  </div>
  
  <div class="row">
    <button class="wide">0</button>
    <button>.</button>
    <button id="equal" class="operator">=</button>
  </div>
</div>
<style>
  .calculator {
  width: 240px;
  margin: 0 auto;
  background-color: #f4f4f4;
  padding: 10px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  font-size: 20px;
}

.row {
  display: flex;
}

button {
  flex: 1;
  padding: 10px;
  font-size: 18px;
  background-color: #e0e0e0;
  border: none;
  border-radius: 4px;
  margin: 5px;
  cursor: pointer;
}

button.wide {
  flex: 2;
}

button.operator {
  background-color: #ff9800;
  color: white;
}

button#equal {
  background-color: #4caf50;
}

button:hover {
  background-color: #d4d4d4;
}

button:active {
  background-color: #9e9e9e;
}

</style> -->
