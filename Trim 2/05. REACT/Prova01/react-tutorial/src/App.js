import React from 'react';
import logo from './img/logo.svg';
import './App.css';
import Header from './Header';
import Footer from './Footer';

class App extends React.Component {
  render(){
      return (
          <div>
                 <Header />
                 <br/>
                 <Footer />
          </div>
      );
  }
}

export default App;
