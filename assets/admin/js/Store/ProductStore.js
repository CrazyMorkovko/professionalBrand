import {observable, action} from "mobx";

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
}

export default ProductStore;
