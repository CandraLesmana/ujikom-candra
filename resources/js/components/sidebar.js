import React from 'react';
import { Link } from 'react-router-dom';

function Sidebar() {
    return (
        <>
           <aside className="left-sidebar">
            <div>
                <div className="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" className="text-nowrap logo-img">
                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                </a>
                <div className="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i className="ti ti-x fs-8"></i>
                </div>
                </div>
                <nav className="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li className="nav-small-cap">
                        <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span className="hide-menu">Home</span>
                        </li>
                        <li className="sidebar-item">
                            <Link to="/home" onClick={() => handleLinkClick("/home")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-layout-dashboard"></i>
                                </span>
                                <span className="hide-menu">Dashboard</span>
                            </Link>
                        </li>
                        <li className="nav-small-cap">
                            <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span className="hide-menu">Transaksi</span>
                        </li>

                        <li className="sidebar-item">
                            <Link to="/home/transaksi-order" onClick={() => handleLinkClick("/home/transaksi-order")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-wash-machine"></i>
                                </span>
                                <span className="hide-menu">Order</span>
                            </Link>
                        </li>

                        <li className="nav-small-cap">
                            <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span className="hide-menu">History</span>
                        </li>

                        <li className="sidebar-item">
                            <Link to="/home/history-order" onClick={() => handleLinkClick("/home/history-order")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-history"></i>
                                </span>
                                <span className="hide-menu">Order</span>
                            </Link>
                        </li>

                        <li className="nav-small-cap">
                            <i className="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span className="hide-menu">Master data</span>
                        </li>

                        <li className="sidebar-item">
                            <Link to="/home/konsumen" onClick={() => handleLinkClick("/home/konsumen")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-friends"></i>
                                </span>
                                <span className="hide-menu">Konsumen</span>
                            </Link>
                        </li>
                        <li className="sidebar-item">
                            <Link to="/home/petugas" onClick={() => handleLinkClick("/home/petugas")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-users"></i>
                                </span>
                                <span className="hide-menu">Petugas</span>
                            </Link>
                        </li>
                        <li className="sidebar-item">
                            <Link to="/home/jenis-layanan" onClick={() => handleLinkClick("/home/jenis-layanan")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-hotel-service"></i>
                                </span>
                                <span className="hide-menu">Jenis Layanan</span>
                            </Link>
                        </li>
                        <li className="sidebar-item">
                            <Link to="/home/jenis-pembayaran" onClick={() => handleLinkClick("/home/jenis-pembayaran")} className="sidebar-link" aria-expanded="false">
                                <span>
                                <i className="ti ti-wallet"></i>
                                </span>
                                <span className="hide-menu">Jenis Pembayaran</span>
                            </Link>
                        </li>
                    </ul>
                </nav>
            </div>
            </aside>
        </>
    );
}

export default Sidebar;