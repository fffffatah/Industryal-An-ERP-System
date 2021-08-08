import NavBar from './components/NavBar'
import SideMenu from './components/SideMenu';
import {BrowserRouter as Router, Switch, Route, Link} from 'react-router-dom'
import './App.css'



function App() {
  return (
    <div className="App">
      <Router>
        <Switch>
          <Route exact path="/">
            <NavBar/>
            <SideMenu/>
          </Route>
          <Route path="/orders">
            <NavBar/>
            2
          </Route>
          <Route path="/customers">
            <NavBar/>
            3
          </Route>
          <Route path="/statistics">
            <NavBar/>
            4
          </Route>
        </Switch>
      </Router>
    </div>
  );
}

export default App;
