import NavBar from './components/NavBar'
import SideMenu from './components/SideMenu';
import {BrowserRouter as Router, Switch, Route, Link} from 'react-router-dom'
import './App.css'

const sidebarBox = document.querySelector('#Menu'),
        sidebarBtn = document.querySelector('#btn'),
        pageWrapper = document.querySelector('#sideMenu');

sidebarBtn.addEventListener('click', event => {
		sidebarBtn.classList.toggle('active');
		sidebarBox.classList.toggle('active');
});

pageWrapper.addEventListener('click', event => {

		if (sidebarBox.classList.contains('active')) {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
		}
});

window.addEventListener('keydown', event => {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
            sidebarBtn.classList.remove('active');
            sidebarBox.classList.remove('active');
		}
});

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
