import React from "react";

function TaskList({ ListView, deleteItem }) {
  let ListMsg = "";
  if (!ListView || ListView.length === 0) {
    ListMsg = (
      <tr>
        <td colSpan={3}>No List Item Rigth Now</td>
      </tr>
    );
  } else {
    ListMsg = ListView.map((item, index ) => {
      return (
        <tr key={index}>
          <th scope="row">{index+1}</th>
          <td>{item.toolItem}</td>
          <td>
            <button type="submit" className="btn btn-success">
              Edit
            </button>
            <button
              type="submit"
              className="btn btn-danger ms-1"
              onClick={() => deleteItem(item.id)}
            >
              Delete
            </button>
          </td>
        </tr>
      );
    });
  }

  return (
    <table className="table mb-4">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Todo item</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>{ListMsg}</tbody>
    </table>
  );
}

export default TaskList;
