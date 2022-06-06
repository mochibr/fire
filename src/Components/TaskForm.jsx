import { useState } from "react";

function TaskForm({addNewData}) {
  const [text, setText] = useState("");
  const [msg, setMsg] = useState("");
  const [isDisabled, setDisabled] = useState(true);

  const textFun = (e) => {
    if (text == "") {
      setDisabled(true);
      setMsg("This Field is Requried");
    }else if(text !== "" && text.trim().length <= 10){
      setDisabled(true);
      setMsg("Test Must Be At Least 10");
    }else{
      setDisabled(false);
      setMsg("");
    }

    setText(e.target.value);
  };

  const submitFun = (e) => {
    e.preventDefault();

    if(text.trim().length !== ""){
      const newAdd = {
        toolItem: text
      }
  
      addNewData(newAdd);
      setText("");
      setDisabled(true);
    }

  }

  return (
    <>
      <form onSubmit= {(e) => submitFun(e)}className="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
        <div className="col-12">
          <div className="form-outline">
            <input
              type="text"
              id="form1"
              className="form-control"
              placeholder="Enter a task here"
              onChange={(e) => textFun(e)}
              value={text}
            />
          </div>
        </div>

        <div className="col-12">
          <button type="submit" className="btn btn-primary" disabled={isDisabled}>
            Save
          </button>
        </div>
      </form>
      <div className="row justify-content-center align-items-center">
        <div className="col-md-12 text-center">
          <b className="text-danger">{msg}</b>
        </div>
      </div>
    </>
  );
}

export default TaskForm;
