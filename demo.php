<!DOCTYPE html>
<html>
  <head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet"> -->

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;800&display=swap" rel="stylesheet">

    <style>
        body {
          margin: 0;
          padding: 0;
          font-family: 'Poppins', sans-serif;
        }
      
        #app {
          max-width: 600px;
          margin: 20px auto;
          padding: 20px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
      
        h1 {
          text-align: center;
          font-family: 'Poppins', sans-serif;
        }
        h1 span{
          color: #3300ff;

        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        } 

        #err_msg {
            display: block;
            font-size: 14px;
            color: #f44336;
            margin-bottom: 8px;
        }

        button#addButton {
            /* background-color: #4caf50; */
            background-color: #3300ff;
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
          display: flex;
          align-items: center;
          padding: 10px;
          margin-bottom: 10px;
          background-color: #f4f4f4;
          border-radius: 5px;
        }
      
        li input[type="checkbox"] {
          margin-right: 10px;
        }
      
        li .edit-input {
        width: 100%;
        padding: 10px;
        margin-right: 10px;
    }
      
        li .edit-button {
            margin-left: auto;
            /* background-color: #2196f3; */
            background-color: #3300ff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
        }
      
        li .delete-button {
          margin-left: 10px;
          background-color: #f44336;
          color: #fff;
          padding: 5px 10px;
          border-radius: 4px;
          border: none;
          cursor: pointer;
        }
        .completed {
            background-color: #3300ff;
        }
        .completed span{
            text-decoration: line-through;
            color: #fff;
        }
        .completed .edit-button,
        .completed .delete-button{
            display: none;
        }
      </style>
      
  </head>
  <body>
    <div id="app">
      <h1>To-Do <span>List</span></h1>
      <input type="text" id="taskInput" placeholder="Enter a task..." />
      <span id="err_msg"></span>
      <button id="addButton">Add Task</button> 
     <ul id="taskList"></ul>
    </div>

    <script src="script.js"></script>
  </body>
</html>
<script>
  // Retrieve tasks from local storage or initialize empty array
  let tasks = JSON.parse(localStorage.getItem("tasks")) || [];
  // Function to render tasks in the UI
  function renderTasks() {
    const taskList = document.getElementById("taskList");
    taskList.innerHTML = "";

    tasks.forEach((task, index) => {

      const listItem = document.createElement("li");
      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.checked = task.completed;

      checkbox.addEventListener("change", () => {
        toggleTaskCompletion(index);
      });

      if (task.completed) {
        listItem.classList.add("completed");
       }

      const taskText = document.createElement("span");
      taskText.textContent = task.text;

      const editInput = document.createElement("input");
      editInput.type = "text";
      editInput.value = task.text;
      editInput.classList.add("edit-input");
      editInput.style.display = "none";

      const errTextEdit = document.createElement("b");
      errTextEdit.classList.add("err-msg-edit");
      errTextEdit.textContent = task.text;

      const editButton = document.createElement("button");
      editButton.textContent = "Edit";
      editButton.classList.add("edit-button");
      editButton.addEventListener("click", () => {
        toggleEditInput(index);
      });

      const deleteButton = document.createElement("button");
      deleteButton.textContent = "Delete";
      deleteButton.classList.add("delete-button");
      deleteButton.addEventListener("click", () => {
        deleteTask(index);
      });

      listItem.appendChild(checkbox);
      listItem.appendChild(taskText);
      listItem.appendChild(editInput);
      listItem.appendChild(editButton);
      listItem.appendChild(deleteButton);

      taskList.appendChild(listItem);
    });
  }

  // Function to add a new task
  function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskText = taskInput.value.trim();
    const errMsg = document.getElementById("err_msg");

    if (taskText !== "") {
      const newTask = {
        text: taskText,
        completed: false,
      };

      tasks.push(newTask);
      saveTasksToLocalStorage();
      renderTasks();

      taskInput.value = "";
      errMsg.innerHTML = "";
    }else{

        errMsg.innerHTML = "Please enter a task before adding.";
    }
  }

  // Function to toggle task completion
  function toggleTaskCompletion(index) {
    tasks[index].completed = !tasks[index].completed;
    saveTasksToLocalStorage();
    renderTasks();
  }

  // Function to toggle edit input visibility
  function toggleEditInput(index) {
    const listItem = document.querySelectorAll("li")[index];

    const taskText = listItem.querySelector("span");
    const editInput = listItem.querySelector(".edit-input");
    const editButton = listItem.querySelector(".edit-button");
    console.log(editInput);
    if (editInput.style.display === "none") {
      taskText.style.display = "none";
      editInput.style.display = "block";
      editInput.focus();
      editButton.textContent = "Save";
    } else {
      const newText = editInput.value.trim();
      if (newText !== "") {
        tasks[index].text = newText;
        saveTasksToLocalStorage();
        renderTasks();
      }else{
        alert("Please enter a task before saving.");
      }
    }
  }

  // Function to delete a task
  function deleteTask(index) {
    tasks.splice(index, 1);
    saveTasksToLocalStorage();
    renderTasks();
  }

  // Function to save tasks to local storage
  function saveTasksToLocalStorage() {
    console.log(tasks);
    localStorage.setItem("tasks", JSON.stringify(tasks));
  }

  // Add event listeners
  document.getElementById("addButton").addEventListener("click", addTask); 
  document.getElementById("taskInput").addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
      addTask();
    }
  });

  // Initial rendering of tasks
  renderTasks();
</script>
