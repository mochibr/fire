<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="todo-list">
    <h1>My To-Do List</h1>
  
    <div class="add-task">
      <input type="text" id="new-task" placeholder="Add a task">
      <button onclick="addTask()">Add</button>
    </div>
    <ul id="task-list"></ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.todo-list {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 10px;
}

.add-task {
  margin-top: 20px;
  display: flex;
}

input[type="text"] {
  flex: 1;
  padding: 5px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px 0 0 4px;
}

button {
  padding: 5px 10px;
  font-size: 16px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

</style>

<script>
    function addTask() {
  var taskInput = document.getElementById("new-task");
  var taskList = document.getElementById("task-list");

  if (taskInput.value !== "") {
    var newTask = document.createElement("li");
    newTask.innerText = taskInput.value;
    taskList.appendChild(newTask);
    taskInput.value = "";
  }
}

</script> -->

<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="todo-container">
    <h1>My To-Do List</h1>
    <form id="todo-form">
      <input type="text" id="todo-input" placeholder="Enter a task...">
      <button type="submit">Add</button>
    </form>
    <ul id="todo-list">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio temporibus pariatur animi excepturi! Sint adipisci tempore sed eveniet culpa ipsa minus ab porro, deserunt ducimus quidem aut eum, fuga asperiores!
    </ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.todo-container {
  max-width: 400px;
  margin: 20px auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

h1 {
  text-align: center;
  color: #333;
}

form {
  display: flex;
  margin-bottom: 20px;
}

input[type="text"] {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 16px;
}

button {
  padding: 10px 15px;
  background-color: #4CAF50;
  border: none;
  color: #fff;
  border-radius: 3px;
  font-size: 16px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 10px;
  background-color: #f9f9f9;
  padding: 10px;
  border-radius: 3px;
  display: flex;
  align-items: center;
}

li span {
  flex: 1;
}

li button {
  margin-left: 10px;
  background-color: #ff4f4f;
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 3px;
  cursor: pointer;
}

</style>

<script>
    // Selecting elements
const todoForm = document.getElementById('todo-form');
const todoInput = document.getElementById('todo-input');
const todoList = document.getElementById('todo-list');

// Function to create a new to-do item
function createTodoItem(task) {
  const li = document.createElement('li');
  const span = document.createElement('span');
  span.innerText = task;
  const deleteBtn = document.createElement('button');
  deleteBtn.innerText = 'Delete';

  li.appendChild(span);
  li.appendChild(deleteBtn);
  todoList.appendChild(li);

  // Add event listener for delete button
  deleteBtn.addEventListener('click', () => {
    li.remove();
  });
}

// Event listener for form submission
todoForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent form submission

  const task = todoInput.value.trim();
  if (task !== '') {
    createTodoItem(task);
    todoInput.value = '';
  }
});

</script> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>To-Do List</title>
</head>

<body>
  <div class="container">
    <h1>To-Do List</h1>
    <form id="todo-form">
      <input type="text" id="todo-input" placeholder="Add a to-do item..." required>
      <button type="submit">Add</button>
    </form>
    <ul id="todo-list">
    </ul>
  </div>

  <script src="script.js"></script>
</body>

</html>

<style>
    /* Reset default styles */
body, ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.container {
  max-width: 400px;
  margin: 40px auto;
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

form {
  display: flex;
}

input[type="text"] {
  flex: 1;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ddd;
  font-size: 16px;
}

button {
  padding: 8px 16px;
  border-radius: 4px;
  background-color: #333;
  color: #fff;
  border: none;
  font-size: 16px;
  margin-left: 10px;
  cursor: pointer;
}

ul li {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background-color: #fff;
  margin-bottom: 10px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

ul li button {
  background-color: #dc3545;
  color: #fff;
  border: none;
  padding: 4px 8px;
  border-radius: 4px;
  cursor: pointer;
}

ul li span {
  flex: 1;
  margin-right: 10px;
}

ul li button.edit {
  background-color: #007bff;
}

ul li button.edit:focus {
  outline: none;
}

.completed {
  text-decoration: line-through;
  opacity: 0.5;
}

</style>
<script>
    const form = document.getElementById("todo-form");
const input = document.getElementById("todo-input");
const todoList = document.getElementById("todo-list");

// Event listener for form submission
form.addEventListener("submit", function (event) {
  event.preventDefault();
  addTodoItem(input.value);
  input.value = "";
});

// Function to add a new to-do item
function addTodoItem(todoText) {
  const li = document.createElement("li");
  const todoTextSpan = document.createElement("span");
  const deleteButton = document.createElement("button");
  const editButton = document.createElement("button");

  todoTextSpan.textContent = todoText;
  deleteButton.textContent = "Delete";
  deleteButton.classList.add("delete");
  editButton.textContent = "Edit";
  editButton.classList.add("edit");

  deleteButton.addEventListener("click", function () {
    li.remove();
  });

  editButton.addEventListener("click", function () {
    const isCompleted = li.classList.contains("completed");
    if (isCompleted) {
      li.classList.remove("completed");
      editButton.textContent = "Edit";
    } else {
      li.classList.add("completed");
      editButton.textContent = "Undo";
    }
  });

  li.appendChild(todoTextSpan);
  li.appendChild(deleteButton);
  li.appendChild(editButton);
  todoList.appendChild(li);
}

</script> -->

<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>To-Do List</h1>
    <input type="text" id="taskInput" placeholder="Enter a task...">
    <button id="addTaskBtn">Add Task</button>
    <ul id="taskList"></ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #333;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 10px;
}

button {
  background-color: #4caf50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  padding: 10px;
  background-color: #f2f2f2;
  margin-bottom: 10px;
  border-radius: 4px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

li span {
  flex-grow: 1;
  margin-right: 10px;
}

button.edit {
  background-color: #2196f3;
}

button.delete {
  background-color: #f44336;
}

button.edit,
button.delete {
  color: #fff;
  border: none;
  padding: 5px 10px;
  border-radius: 4px;
  cursor: pointer;
}

</style>

<script>
    // Get elements from the DOM
const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');

// Add a new task to the list
addTaskBtn.addEventListener('click', () => {
  const taskText = taskInput.value;
  if (taskText.trim() !== '') {
    const taskItem = createTaskItem(taskText);
    taskList.appendChild(taskItem);
    taskInput.value = '';
  }
});

// Create a new task item
function createTaskItem(text) {
  const li = document.createElement('li');
  const span = document.createElement('span');
  span.textContent = text;
  const editBtn = createButton('Edit', 'edit');
  const deleteBtn = createButton('Delete', 'delete');
  li.appendChild(span);
  li.appendChild(editBtn);
  li.appendChild(deleteBtn);
  return li;
}

// Create a button element
function createButton(text, className) {
  const button = document.createElement('button');
  button.textContent = text;
  button.className = className;
  return button;
}

// Delete or edit a task item
taskList.addEventListener('click', (event) => {
  const target = event.target;
  if (target.matches('.delete')) {
    const li = target.closest('li');
    li.parentNode.removeChild(li);
  } else if (target.matches('.edit')) {
    const li = target.closest('li');
    const span = li.querySelector('span');
    const newText = prompt('Edit task:', span.textContent);
    if (newText !== null && newText.trim() !== '') {
      span.textContent = newText;
    }
  }
});

</script> -->

<!DOCTYPE html>
<html>
<head>
  <title>To-Do List</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>To-Do List</h1>

  <div id="task-container">
    <ul id="task-list">
      <!-- Tasks will be dynamically added here -->
    </ul>
  </div>

  <form id="add-task-form">
    <input type="text" id="task-input" placeholder="Enter a task">
    <button type="submit">Add Task</button>
  </form>

  <script src="script.js"></script>
</body>
</html>

<style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

h1 {
  text-align: center;
}

#task-container {
  width: 300px;
  margin: 0 auto;
}

#task-list {
  list-style-type: none;
  padding: 0;
}

.task-item {
  display: flex;
  align-items: center;
  margin-bottom: 5px;
  background-color: #fff;
  padding: 5px;
}

.task-item input[type="text"] {
  flex-grow: 1;
  margin-right: 10px;
}

.task-item .actions {
  display: flex;
  align-items: center;
}

.task-item .actions button {
  margin-right: 5px;
}

.task-item .actions input[type="checkbox"] {
  margin-right: 3px;
}

</style>

<script>
  // Function to create a new task item
function createTaskItem(taskName) {
  const listItem = document.createElement('li');
  listItem.classList.add('task-item');

  const input = document.createElement('input');
  input.type = 'text';
  input.value = taskName;
  input.disabled = true;

  const actions = document.createElement('div');
  actions.classList.add('actions');

  const editButton = document.createElement('button');
  editButton.innerHTML = 'Edit';
  editButton.addEventListener('click', function() {
    input.disabled = !input.disabled;
    if (input.disabled) {
      input.value = taskName; // Reset the value if canceled
      editButton.innerHTML = 'Edit';
    } else {
      editButton.innerHTML = 'Save';
    }
  });

  const deleteButton = document.createElement('button');
  deleteButton.innerHTML = 'Delete';
  deleteButton.addEventListener('click', function() {
    listItem.remove();
  });

  const completedCheckbox = document.createElement('input');
  completedCheckbox.type = 'checkbox';
  completedCheckbox.addEventListener('change', function() {
    if (completedCheckbox.checked) {
      listItem.classList.add('completed');
    } else {
      listItem.classList.remove('completed');
    }
  });

  actions.appendChild(editButton);
  actions.appendChild(deleteButton);
  listItem.appendChild(input);
  listItem.appendChild(actions);
  listItem.insertBefore(completedCheckbox, listItem.firstChild);

  return listItem;
}

// Function to handle the form submission
function handleFormSubmit(event) {
  event.preventDefault();
  const taskInput = document.getElementById('task-input');
  const taskName = taskInput.value.trim();

  if (taskName !== '') {
    const taskList = document.getElementById('task-list');
    const taskItem = createTaskItem(taskName);
    taskList.appendChild(taskItem);
    taskInput.value = '';
  }
}

// Add form submit event listener
const addTaskForm = document.getElementById('add-task-form');
addTaskForm.addEventListener('submit', handleFormSubmit);

</script>



<html>
  <head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <div class="container">
      <h1>To-Do List</h1>
      <form id="todo-form">
        <input id="todo-input" type="text" placeholder="Add a task" />
        <button type="submit">Add</button>
        lorem100
      </form>
      <ul id="todo-list"></ul>
    </div>
    <script src="script.js"></script>
  </body>
</html>

<script>
  // Get the necessary elements
  const form = document.getElementById("todo-form");
  const input = document.getElementById("todo-input");
  const list = document.getElementById("todo-list");

  // Create an array to store the tasks
  let tasks = [];

  // Function to add a task
  function addTask(task) {
    tasks.push(task);
    saveTasks();
    renderTasks();
  }

  // Function to delete a task
  function deleteTask(index) {
    tasks.splice(index, 1);
    saveTasks();
    renderTasks();
  }

  // Function to toggle task completion
  function toggleTask(index) {
    tasks[index].completed = !tasks[index].completed;
    saveTasks();
    renderTasks();
  }

  // Function to edit a task
  function editTask(index) {
    const listItem = list.childNodes[index];
    const label = listItem.querySelector("label");
    const inputField = document.createElement("input");
    const editButton = listItem.querySelector(".edit-button");

    inputField.type = "text";
    inputField.value = label.textContent;
    inputField.addEventListener("keydown", (event) => {
      if (event.key === "Enter") {
        const newTask = inputField.value.trim();
        if (newTask !== "") {
          tasks[index].task = newTask;
          saveTasks();
          renderTasks();
        }
      }
    });

    listItem.replaceChild(inputField, label);
    editButton.textContent = "Save";
    editButton.removeEventListener("click", () => editTask(index));
    editButton.addEventListener("click", () => {
      const newTask = inputField.value.trim();
      if (newTask !== "") {
        tasks[index].task = newTask;
        saveTasks();
        renderTasks();
      }
    });

    inputField.focus();
  }

  // Function to save tasks to local storage
  function saveTasks() {
    localStorage.setItem("tasks", JSON.stringify(tasks));
  }

  // Function to load tasks from local storage
  function loadTasks() {
    const storedTasks = localStorage.getItem("tasks");
    if (storedTasks) {
      tasks = JSON.parse(storedTasks);
    }
  }

  // Function to render tasks on the page
  function renderTasks() {
    // Clear the existing list
    list.innerHTML = "";

    // Render each task
    tasks.forEach((task, index) => {
      const listItem = document.createElement("li");
      listItem.classList.add("task");
      listItem.innerHTML = `
      <input type="checkbox" ${
        task.completed ? "checked" : ""
      } onchange="toggleTask(${index})">
      <label class="${task.completed ? "completed" : ""}">${task.task}</label>
      <div class="actions">
        <button class="edit-button" onclick="editTask(${index})">Edit</button>
        <button onclick="deleteTask(${index})">Delete</button>
      </div>
    `;
      list.appendChild(listItem);
    });
  }

  // Event listener for form submission
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const task = input.value.trim();
    if (task !== "") {
      addTask({ task, completed: false });
      input.value = "";
    }
  });

  // Load tasks on page load
  loadTasks();
  renderTasks();
</script>
