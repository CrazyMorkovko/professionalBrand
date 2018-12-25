import React from 'react';
import {inject, observer} from "mobx-react";

@inject('rootStore')
@observer
class Products extends React.Component {
  constructor(props) {
    super(props);
    this.props.rootStore.productStore.loadProducts();
  }

  render() {
    const products = this.props.rootStore.productStore.products;
    return <div className="container-fluid mt-2">
      <div className="d-flex justify-content-between ">
        <h1>Products</h1>
        <div className='d-flex align-items-center'>
          <button className="btn btn-sm btn-outline-primary">Add product</button>
        </div>
      </div>
      <table className="table table-hover table-bordered">
        <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th>Description</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {products.map(p => <tr key={p.id}>
          <td>{p.id}</td>
          <td>{p.name}</td>
          <td>{p.price}</td>
          <td>{p.image}</td>
          <td>{p.description}</td>
          <td>{p.category_id}</td>
          <td>
            <div className="btn-group">
              <button className="btn btn-sm btn-primary">Edit</button>
              <button className="btn btn-sm btn-danger">Remove</button>
            </div>
          </td>
        </tr>)}
        </tbody>
      </table>
    </div>;
  }

  addProduct() {
    this.props.rootStore.productStore.addProduct();
  }
}

export default Products;
