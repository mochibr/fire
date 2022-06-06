import React from "react";

function Header({ title, logo }) {
  return (
    <h4 className="text-center my-3 pb-3">{title}</h4>
  );
}
Header.defaultProps = {
  logo: "here",
};

export default Header;
