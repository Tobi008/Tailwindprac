import React, {Component} from 'react';
import ReactDOM from 'react-dom';
//import 'resources/css/app.css';

export default class Tailwindprac extends Component{
    render(){
    return (
        <div className="bg-gray-100 grid lg:grid-cols-2 2xl:grid-cols-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
    }
}


if (document.getElementById('Tailwindprac')) {
    ReactDOM.render(<Tailwindprac />, document.getElementById('Tailwindprac'));
}
