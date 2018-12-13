import React from 'react';

export default class Cart extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
    return <div>
      <a href="#" ><span className="header-cart__count">2</span><i className="icon icon-cart"></i></a>
    </div>
  }
}
