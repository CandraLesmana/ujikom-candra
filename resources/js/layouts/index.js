import React from "react";
import { Outlet } from "react-router-dom";
import Navbar from "../components/navbar";
import Sidebar from "../components/sidebar";

function Layout() {
    return(
        <div className="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

                <Sidebar />

                <div className="body-wrapper">

                    <Navbar />

                    <Outlet />
                </div>
            </div>
    );
}

export default Layout;