import React from 'react';
import Navbar from './components/Navbar';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import Home from './components/Home';
import getData from './components/GetData';

function App() {
  return (
   <Router>
    <Navbar />
    <Switch>
      <Route path='/' exact component={Home} />
      <Route path='/api/users'  component={getData} />
    </Switch>
   </Router>
  );
}
  
export default App;