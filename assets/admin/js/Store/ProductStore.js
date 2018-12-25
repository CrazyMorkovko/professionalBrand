import {observable, action} from "mobx";
import axios from "axios";

class ProductStore {
  constructor(rootStore) {
    this.rootStore = rootStore;
  }

  @observable
  products = [
    {
      id : 1,
      name: 'test1'
    },
    {
      id : 2,
      name: 'test2'
    }
  ];

  @action
  addProduct() {
    this.products.push({
      id : 10,
      name : 'test3'
    })
  }

  @action
  loadProducts() {
    axios.get("/?page=admin/products").then(action((response) => {
      this.products = response.data;
    }))
  }
}

export default ProductStore;
