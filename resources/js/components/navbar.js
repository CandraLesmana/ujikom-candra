import React from 'react';
import axios from 'axios';
import { useEffect } from 'react';

function checkToken() {
    const token = localStorage.getItem('token');
    return token ? true : false;
}

function Navbar() {

    const handleLogout = async () => {
        try{
            const currentDomain = window.location.origin;
            const response = await axios.post(currentDomain + "/api/v1/logout", {}, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });
            console.log(response.data.message);
            localStorage.removeItem('token');
            window.location.href = '/login';

        } catch (error) {
            console.log(error.response);
        }
    }

    console.log(localStorage.getItem('token'));
    useEffect(() => {
        // Memeriksa token saat komponen dimuat
        const tokenExists = checkToken();
        // Jika token tidak ada, redirect ke halaman login
        if (!tokenExists) {
            window.location.href = '/login';
        }
      }, []);

    return(
        <>
            <header className="app-header">
                <nav className="navbar navbar-expand-lg navbar-light bg-white">
                <ul className="navbar-nav">
                    <li className="nav-item d-block d-xl-none">
                    <a className="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="#">
                        <i className="ti ti-menu-2"></i>
                    </a>
                    </li>
                    <li className="nav-item">
                    <a className="nav-link nav-icon-hover" href="#">
                        <i className="ti ti-bell-ringing"></i>
                        <div className="notification bg-primary rounded-circle"></div>
                    </a>
                    </li>
                </ul>
                <div className="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul className="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" className="btn btn-primary">Download Free</a>
                    <li className="nav-item dropdown">
                        <a className="nav-link nav-icon-hover" href="#" id="drop2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" className="rounded-circle"/>
                        </a>
                        <div className="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <div className="message-body">
                            <a href="#" className="d-flex align-items-center gap-2 dropdown-item">
                            <i className="ti ti-user fs-6"></i>
                            <p className="mb-0 fs-3">My Profile</p>
                            </a>
                            <a href="#" className="d-flex align-items-center gap-2 dropdown-item">
                            <i className="ti ti-mail fs-6"></i>
                            <p className="mb-0 fs-3">My Account</p>
                            </a>
                            <a href="#" className="d-flex align-items-center gap-2 dropdown-item">
                            <i className="ti ti-list-check fs-6"></i>
                            <p className="mb-0 fs-3">My Task</p>
                            </a>
                            <button type="submit" className="btn btn-outline-primary mx-3 mt-2 d-block" onClick={handleLogout}>Logout</button>
                            {/* <a href="./authentication-login.html" className="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a> */}
                        </div>
                        </div>
                    </li>
                    </ul>
                </div>
                </nav>
            </header>
        </>
    );
}

export default Navbar;