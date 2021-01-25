import React from 'react';
import ReactDom from 'react-dom';
import Family from './Pages/deMahieu-deVinck';

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


const App = () => {
    return (
        <>
            <Family />
        </>
    );
    
}

const rootElement = document.querySelector('#app');

ReactDom.render(<App />, rootElement);