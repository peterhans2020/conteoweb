
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import axios from 'axios';

import {BrowserRouter, Route} from 'react-router-dom';
import Header from './layouts/header';
import Sidebar from './layouts/sidebar';
import Footer from './layouts/footer';
import Home from './home';

import IndexServicio from './venta/servicio';
import IndexRecinto from './venta/recinto';
import CrearRecinto from './venta/recinto/crear';
import IndexCiudadano from './venta/ciudadano';
import CrearCiudadano from './venta/ciudadano/crear';
import IndexPartido from './venta/partido';
import CrearPartido from './venta/partido/crear';
import IndexActa from './venta/acta';
import CrearActa from './venta/acta/crear';
import Estadistica from './estadistica';
import ShowActa from './venta/acta/show';
import ReporteVoto from './reportes/votos'

export default class Index extends Component {
    constructor(props) {
        super(props);
        this.state = {
            token: '',
            usuario: '',
        }
    }
    componentDidMount() {

        console.log('INIT');
        // axios.get('/token').then(
        //     (response) => {
        //         console.log(response.data)
        //         this.setState({
        //             token: response.data.token,
        //             usuario: response.data.usuario
        //         })
        //     }
        // ).catch(
        //     error => console.log(error)
        // )
    }
    render() {
        return (
            <BrowserRouter>
                <div className="main-wrapper">
                    <div className="navbar-bg"></div>
                    <Header usuario={this.state.usuario} token={this.state.token} />
                    <Sidebar />

                    <Route exact path='/home' render={ (props) => <Home { ...props} /> } />
                    <Route exact path='/reporte_voto' render={ (props) => <ReporteVoto { ...props} /> } />

                    <Route exact path='/inicio/recinto/index' render={ (props) => <IndexRecinto { ...props} /> } />
                    <Route exact path='/inicio/recinto/create' render={ (props) => <CrearRecinto { ...props} /> } />

                    <Route exact path='/inicio/ciudadano/index' render={ (props) => <IndexCiudadano { ...props} /> } />
                    <Route exact path='/inicio/ciudadano/create' render={ (props) => <CrearCiudadano { ...props} /> } />

                    <Route exact path='/inicio/partido/index' render={ (props) => <IndexPartido { ...props} /> } />
                    <Route exact path='/inicio/partido/create' render={ (props) => <CrearPartido { ...props} /> } />
                
                    <Route exact path='/inicio/acta/index' render={ (props) => <IndexActa { ...props} /> } />
                    <Route exact path='/inicio/acta/create' render={ (props) => <CrearActa { ...props} /> } />
                    <Route exact path='/inicio/acta/show/:id' render={ (props) => <ShowActa { ...props} /> } />

                    <Route exact path='/inicio/servicio/index' render={ (props) => <IndexServicio { ...props} /> } />
                    <Route exact path='/inicio/estadistica/index' render={ (props) => <Estadistica { ...props} /> } />

                </div>
            </BrowserRouter>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
