
import React, { Component } from 'react';

export default class Header extends Component {

    constructor(props) {
        super(props);
        this.state = {}
    }
    onLogout(event) {
        event.prevenDefault();
        document.getElementById("logout-form").submit();
    }
    render() {
        return (
            <nav className="navbar navbar-expand-lg main-navbar">
                <form className="form-inline mr-auto">
                    <ul className="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" className="nav-link nav-link-lg">
                                <i className="ion ion-navicon-round"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="search" className="nav-link nav-link-lg d-sm-none">
                                <i className="ion ion-search"></i>
                            </a>
                        </li>
                    </ul>
                </form>
                <ul className="navbar-nav navbar-right">
                    <li className="dropdown dropdown-list-toggle">
                        <a href="#" data-toggle="dropdown" className="nav-link notification-toggle nav-link-lg beep">
                            <i className="ion ion-ios-bell-outline"></i>
                        </a>
                        <div className="dropdown-menu dropdown-list dropdown-menu-right">
                            <div className="dropdown-header">Notifications
                                <div className="float-right">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                            <div className="dropdown-list-content">
                                
                                <a href="#" className="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="/dist/img/avatar/avatar-2.jpeg" className="rounded-circle dropdown-item-img" />
                                    <div className="dropdown-item-desc">
                                        <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                        <div className="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" className="dropdown-item">
                                    <img alt="image" src="/dist/img/avatar/avatar-5.jpeg" className="rounded-circle dropdown-item-img" />
                                    <div className="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                        <div className="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li className="dropdown">
                        <a href="#" data-toggle="dropdown"
                            className="nav-link dropdown-toggle nav-link-lg">
                            <i className="ion ion-android-person d-lg-none"></i>
                            <div className="d-sm-none d-lg-inline-block">
                                user
                            </div>
                        </a>
                    
                        <div className="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" className="dropdown-item has-icon">
                                <i className="ion ion-android-person"></i> Perfil
                            </a>
                            
                            <form id="logout-form" action="/logout" method="POST" >
                                <input type='hidden' name="_token" value={this.props.token} />
                                <button type='submit' className="dropdown-item has-icon"
                                    style={{outline: 'none', cursor: 'pointer'}}
                                >
                                    <i className="ion ion-log-out"></i> Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
        );
    }
}
