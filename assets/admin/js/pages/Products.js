import React from 'react';
import {inject, observer} from "mobx-react";

@inject('rootStore')
@observer
class Products extends React.Component {
  render() {
    const products = this.props.rootStore.productStore.products;
    return <div onClick={this.addProduct.bind(this)}>Products: {products.map(p => <div key={p.id}>{p.name}</div>)}</div>;
  }

  addProduct() {
    this.props.rootStore.productStore.addProduct();
  }
}

export default Products;
