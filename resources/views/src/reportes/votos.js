import React, { Component } from 'react';
import {withRouter, Link} from 'react-router-dom';
import axios from 'axios';
import ws from '../ws';
import { result } from 'lodash';

export default class ReporteVoto extends Component {

    constructor(props) {
        super(props);
        this.state = {
            ciudades: [],
            recintos: [],
            recintosCiudad: [],
            mesas: [],
            mesasRecinto: [],
            idciudad: 0,
            idrecinto: 0,
            idmesa: 0,
            idciudad2: 0
        };
    }

    allVotos() {

    }

    componentDidMount() {

        this.getData();

    }

    getData() {

        axios.get(ws.ws_reporte_data)
        .then((result) => {
            result = result.data;
            if (result.response == 1) {
                this.setState({
                    ciudades: result.ciudades,
                    recintos: result.recintos,
                    recintosCiudad: result.recintos,
                    mesas: result.mesas,
                    mesasRecinto: result.mesas,
                });
            }
        })
        .catch(error => {
            console.log(error);
        });

    }

    generarReporte() {

    }

    onChangeCiudad(e) {

        this.setState({
            idciudad: e.target.value,
            idrecinto: 0,
            idmesa: 0,
            recintosCiudad: this.getRecintos(e.target.value)
        });

    }

    onChangeCiudad2(e) {
        
        this.setState({
            idciudad2: e.target.value
        });

    }

    onChangeRecito(e) {

        this.setState({
            idrecinto: e.target.value,
            idmesa: 0,
            mesasRecinto: this.getMesas(e.target.value)
        });

    }

    onChangeMesas(e) {

        this.setState({
            idmesa: e.target.value
        });

    }

    getRecintos(idciudad) {

        let { recintos } = this.state;
        let data = [];
        recintos.forEach((recinto) => {
            if (recinto.idciudad == idciudad) {
                data.push(recinto);
            }
        });
        return data;

    }

    getMesas(idrecinto) {

        let { mesas } = this.state;
        let data = [];
        mesas.forEach((mesa) => {
            if (mesa.idrecinto == idrecinto) {
                data.push(mesa);
            }
        });
        return data;
        
    }

    render() {

        const input_token = document.getElementById('token_post');

        return (
            <div className="main-content">
                <div style={{
                    marginTop: 40
                }}>
                    <h1>
                        Reporte de Votos
                    </h1>
                </div>

                {/* <div 
                    // className="row"
                    style={{
                        textAlign: 'center',
                        justifyContent: 'center'
                    }}>
                    <button className='btn btn-sm btn-primary mr-2'
                        onClick={this.allVotos.bind(this)}
                    >
                        Todos
                    </button>
                    <button className='btn btn-sm btn-secondary mr-2'
                        onClick={this.allVotos.bind(this)}
                    >
                        Departamento
                    </button>
                    <button className='btn btn-sm btn-danger mr-2'
                        onClick={this.allVotos.bind(this)}
                    >
                        Mesa
                    </button>
                </div> */}
                {/* <div>

                </div> */}
                <div className='row' style={{
                    textAlign: 'center',
                    justifyContent: 'center'
                }}>
                    <div className='form-group col-md-4'>
                        <label>Departamentos</label>
                        <select className="form-control" 
                            value={this.state.idciudad}
                            onChange={this.onChangeCiudad.bind(this)}
                        >
                            <option value={0}>Ninguno</option>
                            {this.state.ciudades.map(
                                (data, key) => (
                                    <option value={data.id} key={key}>{data.nombre}</option>
                                )
                            )}
                        </select>
                        <span>Si no selecciona ninguno se generar de todos los departamentos</span>
                    </div>
                    <div className='form-group col-md-4'>
                        <label>Recintos</label>
                        <select className="form-control" 
                            value={this.state.idrecinto}
                            onChange={this.onChangeRecito.bind(this)}
                        >
                            <option value={0}>Ninguno</option>
                            {this.state.recintosCiudad.map(
                                (data, key) => (
                                    <option value={data.id} key={key}>{data.nombre}</option>
                                )
                            )}
                        </select>
                        <span>Si no selecciona ninguno se generar de todos los recintos</span>
                    </div>
                    <div className='form-group col-md-4'>
                        <label>Mesas</label>
                        <select className="form-control" 
                            value={this.state.idmesa}
                            onChange={this.onChangeMesas.bind(this)}
                        >
                            <option value={0}>Ninguno</option>
                            {this.state.mesasRecinto.map(
                                (data, key) => (
                                    <option value={data.id} key={key}>{data.nombre}</option>
                                )
                            )}
                        </select>
                        <span>Si no selecciona ninguno se generar de todas las mesas</span>
                    </div>
                </div>
                <div style={{
                    textAlign: 'center',
                    justifyContent: 'center'
                }}>
                    <form action='/reporte/generar1' method='post'>
                        <input type='hidden' name='_token' value={input_token.value} />
                        <input type='hidden' name='idciudad' value={this.state.idciudad} />
                        <input type='hidden' name='idrecinto' value={this.state.idrecinto} />
                        <input type='hidden' name='idmesa' value={this.state.idmesa} />

                        <button 
                            className='btn btn-sm btn-danger mr-2'
                            type='submit'
                            // onClick={this.generarReporte.bind(this)}
                        >
                            Generar
                        </button>

                    </form>
                </div>
                <div style={{
                     width: '100%',
                     marginTop: 50,
                     textAlign: 'center',
                     justifyContent: 'center'
                }}>
                    <label style={{
                        fontSize: 26
                    }}>
                        Conteo de Votos
                    </label>
                </div>
                <div className='row' style={{
                    width: '100%',
                    textAlign: 'center',
                    justifyContent: 'center'
                }}>

                    <br></br>
                    <br></br>
                    <div className='form-group col-md-4'>
                        <label>Departamentos</label>
                        <select className="form-control" 
                            value={this.state.idciudad2}
                            onChange={this.onChangeCiudad2.bind(this)}
                        >
                            <option value={0}>Ninguno</option>
                            {this.state.ciudades.map(
                                (data, key) => (
                                    <option value={data.id} key={key}>{data.nombre}</option>
                                )
                            )}
                        </select>
                        <span>Si no selecciona ninguno se generar de todos los departamentos</span>
                    </div>
                </div>
                <div className='row' style={{
                    width: '100%',
                    // textAlign: 'center',
                    justifyContent: 'center'
                }}>
                    <form action='/reporte/generar2' method='post'>
                        <input type='hidden' name='_token' value={input_token.value} />
                        <input type='hidden' name='idciudad' value={this.state.idciudad2} />

                        <button 
                            className='btn btn-sm btn-danger mr-2'
                            type='submit'
                            // onClick={this.generarReporte.bind(this)}
                        >
                            Generar
                        </button>

                    </form>
                </div>
            </div>
        );
    }

}