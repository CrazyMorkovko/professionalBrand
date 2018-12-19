import React from 'react';
import ReactDom from 'react-dom';
import {HashRouter as Router, Link, Route} from 'react-router-dom';
import Index from "./pages/Index";
import Products from "./pages/Products";
import Navigation from "./components/Navigation";
import RootStore from './Store/RootStore';
import {Provider} from "mobx-react";

const rootStore = new RootStore();

class App extends React.Component {
  render() {
    return <Router>
      <div>
        <Navigation/>
        <Route path="/" exact component={Index}/>
        <Route path="/products" component={Products}/>
      </div>
    </Router>
  }
}

ReactDom.render(<Provider rootStore={rootStore}><App/></Provider>, document.getElementById('app'));
