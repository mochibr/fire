<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>To-Do List</h1>
  <form id="todo-form">
    <input id="todo-input" type="text" placeholder="Add a task">
    <button type="submit">Add</button>
  </form>

  <ul id="todo-list">
	<li>
		Here 
		<button type="button" class="edit">Edit</button>
		<button type="button" class="delete">Delete</button>
	</li>
	<li>Here</li>
  </ul>

  <script src="script.js"></script>
</body>
</html>
<style>
	body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
  color: #333;
  margin: 20px 0;
}

form {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

input[type="text"] {
  padding: 10px;
  font-size: 16px;
  border: none;
  border-radius: 4px 0 0 4px;
  width: 300px;
}

button {
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 0 4px 4px 0;
  font-size: 16px;
  cursor: pointer;
}

ul {
  list-style-type: none;
  padding: 0;
  width: 50%;
margin: 0 auto;
}

li {
  display: flex;
  align-items: center;
  background-color: #fff;
  padding: 10px;
  margin-bottom: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

li span {
  flex-grow: 1;
  margin-left: 10px;
}

.completed {
  text-decoration: line-through;
  opacity: 0.7;
}

button.edit {
  margin-left: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 14px;
  cursor: pointer;
}

button.delete {
  background-color: #ff4d4d;
  color: #fff;
  border: none;
  padding: 5px 10px;
  font-size: 14px;
  cursor: pointer;
}

</style> -->

<!-- <!DOCTYPE html>
<html lang="en">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
    rel="stylesheet"
  />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        background: #000;
        justify-content: center;
        align-items: center;
        height: 100vh;
        display: flex;
        align-items: start;
        padding-top: 47px;
        font-family: "Roboto", sans-serif;
      }
      .todo-wrap {
        width: 30%;
      }
      .input-group {
        background: #fff;
        padding: 23px;
        border-radius: 5px;
      }
      .input-group input {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 2px 8px;
        font-size: 13px;
        height: 28px !important;
        display: inline-block;
        width: 82%;
      }
      .input-group button {
        background: #000;
        padding: 4px 10px;
        border-radius: 4px;
        height: 34px;
        border: 1px solid #000;
        color: #fff;
        line-height: 13px;
        font-size: 14px;
        width: 56px;
        margin-left: 11px;
      }
      table#todo-list {
        width: 100%;
        background: #fff;
        margin-top: 20px;
        border-radius: 4px;
      }
      table#todo-list tr {
        border-bottom: 1px solid #ccc;
        padding: 19px 0px !important;
        display: flex;
        justify-content: space-between;
        margin: 0 18px;
      }
      table#todo-list tr td button {
        background: #000;
        border: 0;
        color: #fff;
        padding: 5px 7px;
        border-radius: 3px;
        font-size: 12px;
      }
      table#todo-list tr td button.delete_btn {
        background: #b70606;
      }
      table#todo-list tr td {
        font-size: 14px;
        text-transform: capitalize;
        line-height: initial;
      }
      table#todo-list tr input {
        margin-right: 5px;
        position: relative;
        top: 2px;
        float: left;
      }
      table#todo-list tr:last-child {
        border-bottom: 0;
      }
      table#todo-list tr input:checked + .completed {
        text-decoration: line-through;
      }
      span.completed {
        float: left;
        width: 86%;
      }
      table#todo-list tr td:first-child {
        width: 86%;
      }
    </style>
  </head>
  <body>
    <div class="todo-wrap">
      <form id="todo-form">
        <div class="input-group">
          <input id="todo-input" type="text" placeholder="Add new task..."/>
          <button type="submit">Add</button>
        </div>
      </form>
      <table id="todo-list">
        <tbody>
          <tr>
            <td>
              <input type="checkbox" onchange="toggleTask(0)"/>
              <span class="completed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                aut asperiores doloribus vel commodi illo officiis, quia earum,
                labore harum in fuga ex. Pariatur assumenda ex, adipisci tenetur
                placeat aperiam?</span>
            </td>
            <td>
              <button
                class="edit_btn" onclick="editTask(1, prompt('Enter a new task:', 'hgh'))"><i class="fa fa-edit"></i></button>
              <button class="delete_btn" onclick="deleteTask(1)"><i class="fa fa-trash-o"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html> -->

<style>
	.completed{
	  text-decoration: line-through;
	}
  </style>
  <form id="todo-form">
	<input id="todo-input" type="text" placeholder="Add new task...">
	<button type="submit">Add</button>
  </form>
  
  <ul id="todo-list"></ul>
  
  <Script>
	// Get the necessary elements
  const form = document.getElementById('todo-form');
  const input = document.getElementById('todo-input');
  const list = document.getElementById('todo-list');
  
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
  function editTask(index, newTask) {
	tasks[index].task = newTask;
	saveTasks();
	renderTasks();
  }
  
  // Function to save tasks to local storage
  function saveTasks() {
	localStorage.setItem('tasks', JSON.stringify(tasks));
  }
  
  // Function to load tasks from local storage
  function loadTasks() {
	const storedTasks = localStorage.getItem('tasks');
	if (storedTasks) {
	  tasks = JSON.parse(storedTasks);
	}
  }
  
  // Function to render tasks on the page
  function renderTasks() {
	// Clear the existing list
	list.innerHTML = '';
  
	// Render each task
	tasks.forEach((task, index) => {
	  const listItem = document.createElement('li');
	  listItem.innerHTML = `
		<input type="checkbox" ${task.completed ? 'checked' : ''} onchange="toggleTask(${index})">
		<span class="${task.completed ? 'completed' : ''}">${task.task}</span>
		<button onclick="editTask(${index}, prompt('Enter a new task:', '${task.task}'))">Edit</button>
		<button onclick="deleteTask(${index})">Delete</button>
	  `;
	  list.appendChild(listItem);
	});
  }
  
  // Event listener for form submission
  form.addEventListener('submit', (e) => {
	e.preventDefault();
	const task = input.value.trim();
	if (task !== '') {
	  addTask({ task, completed: false });
	  input.value = '';
	}
  });
  
  // Load tasks on page load
  loadTasks();
  renderTasks();
  
  </Script>
