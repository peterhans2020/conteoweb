
import React, { Component } from 'react';
import {withRouter} from 'react-router-dom';

class Home extends Component {

    componentDidMount() {
        console.log('INIT HOME');
    }

    render() {
        return (
            <div className="main-content">
                <section className="section">
                    <h1 className="section-header">
                        <div>Inicio</div>
                    </h1>
                    <div className="row">   
                        <div className="col-12 col-md-8 col-lg8">
                            <div className="card">
                            <div className="card-header">
                                <h4>Resultado Estadistico</h4>
                            </div>
                            <div className="card-body">
                                <canvas id="myChart4"></canvas>
                            </div>
                            </div>
                        </div>              
                    </div>
                </section>
            </div>
        );
    }
}

export default withRouter(Home);
