
import React, { Component } from 'react';
import {Link} from 'react-router-dom';

export default class Sidebar extends Component {
    render() {
        return (
            <div className="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div className="sidebar-brand">
                        <a href="index.html">Stisla Lite</a>
                    </div>
                    <div className="sidebar-user">
                        <div className="sidebar-user-picture">
                        <img alt="image" src="/dist/img/avatar/avatar-1.jpeg" />
                        </div>
                        <div className="sidebar-user-details">
                        <div className="user-name">usuario</div>
                        <div className="user-role">
                            Administrator
                        </div>
                        </div>
                    </div>
                    <ul className="sidebar-menu">
                        <li className="menu-header">Dashboard</li>
                        <li className="active">
                            <a href="/home"><i className="ion ion-speedometer"></i><span>Home</span></a>
                        </li>

                        <li className="menu-header">Menu</li>
                        <li>
                            <a href="#" className="has-dropdown">
                                <i className="ion ion-ios-albums-outline"></i>
                                <span>Administracion de Usuarios</span>
                            </a>
                            <ul className="menu-dropdown">
                                <li>
                                    <Link to='/'>
                                        <i className="ion ion-ios-circle-outline"></i> Usuario 
                                    </Link>
                                </li>
                                <li>
                                    <Link to='/'>
                                        <i className="ion ion-ios-circle-outline"></i> Grupo
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" className="has-dropdown">
                                <i className="ion ion-ios-albums-outline"></i>
                                <span>Gestión Electoral</span>
                            </a>
                            <ul>
                                <li>
                                    <Link to='/inicio/acta/index'>
                                        <i className="ion ion-ios-circle-outline"></i> Acta 
                                    </Link>
                                </li>
                                <li>
                                    <Link to='/inicio/partido/index'>
                                        <i className="ion ion-ios-circle-outline"></i> Partido
                                    </Link>
                                </li>
                                <li>
                                    <Link to='/inicio/recinto/index'>
                                        <i className="ion ion-ios-circle-outline"></i> Recinto
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" className="has-dropdown">
                                <i className="ion ion-ios-albums-outline"></i>
                                <span>Reportes</span>
                            </a>
                            <ul>
                                <li>
                                    <Link to='/reporte_voto'>
                                        <i className="ion ion-ios-circle-outline"></i> Reporte de Votos 
                                    </Link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

        );
    }
}
