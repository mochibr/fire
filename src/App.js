import Header from "./Components/Header";
import TaskForm from "./Components/TaskForm";
import TaskList from "./Components/TaskList";
import ListData from "./Components/Data/ListData";
import { useState } from "react";
import "./style.css";
const App = () => {
  // const arr = ["khan", "pardeep", "garg"];
  const title = "To Do App";
  const [ListDataView, setListData] = useState(ListData);

  const addNewData = (addNewValue) => {
    addNewValue.id = Math.floor(Math.random() * 100);
    console.log(addNewValue);
    setListData([addNewValue, ...ListDataView]);
  }

  const deleteItem = (id) => {
    if(window.confirm("Are you sure want to delete this?")){
      setListData(ListDataView.filter(item => item.id !== id));
    }
    
  };

  return (
    <>
        <div className="container py-5 h-100">
          <div className="row d-flex justify-content-center align-items-center h-100">
            <div className="col col-lg-9 col-xl-7">
              <div className="card rounded-3">
                <div className="card-body p-4">
                 <Header title={title} />
                 <TaskForm addNewData={addNewData}/>
                 <TaskList ListView={ListDataView} deleteItem={deleteItem}/>
                </div>
              </div>
            </div>
          </div>
        </div>

    </>
  );
};
export default App;
