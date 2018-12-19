import ProductStore from "./ProductStore";

class RootStore {
  constructor() {
    this.productStore = new ProductStore(this);
  }
}

export default RootStore;
