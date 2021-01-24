import React from 'react';
import ReactDom from 'react-dom';

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


const App = () => {
    return <h1>Famille de Mahieu</h1>;
}

const rootElement = document.querySelector('#app');

ReactDom.render(<App />, rootElement);