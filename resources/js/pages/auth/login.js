import React, {useEffect, useState } from "react";
import axios from "axios";

function token(){
    const token = localStorage.getItem('token');
    if(token){
        window.location.href = '/home';
    }
}

function Login() {

    const [Email, setEmail] = useState("");
    const [Password, setPassword] = useState("");
    const [Error, setError] = useState("");

    const handleLogin = async (e) => {
        e.preventDefault();
        try {
            const currentDomain = window.location.origin;
            const response = await axios.post(currentDomain + "/api/v1/login", {
                email: Email,
                password: Password,
            });
            console.log(response.data.message);
            localStorage.setItem("token", response.data.token);
            window.location.href = "/home";
        } catch (error) {
            setError(error.response.data.message);
        }
    }

    const handleClick = () => {
        // disable the button click and cursor loader
        const btn = document.querySelector("button");
        if (btn) { 
            // Simpan teks tombol sebelum mengubahnya
            const originalText = btn.innerHTML;
            
            // Mengganti teks tombol menjadi "Loading..."
            btn.innerHTML = "Loading...";
            btn.style.cursor = "wait";

            

            
            // Mengembalikan tombol ke status awal setelah waktu tertentu atau selesai proses asinkron
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                btn.style.cursor = "pointer";
            }, 2000); 
        }
    }

    useEffect(() => {
        token();
    }, []);

    return(
        <>
            <div className="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
                data-sidebar-position="fixed" data-header-position="fixed">
                <div className="position-relative hero-section overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                    <div className="d-flex align-items-center justify-content-center w-100">
                        <div className="row justify-content-center w-100">
                            <div className="col-md-8 col-lg-6 col-xxl-3">
                                <div className="card mb-0">
                                    <div className="card-body">
                                        <a href="./index.html" className="text-nowrap logo-img text-center d-block py-3 w-100">
                                        <img src="../assets/images/logos/dark-logo.svg" width="180" alt=""/>
                                        </a>
                                        <p className="text-center">Your Social Campaigns</p>
                                        {Error && <div class="alert alert-danger" role="alert">
                                                {Error}
                                        </div>}
                                        <form onSubmit={handleLogin}>
                                            <div className="mb-3">
                                                <label htmlFor="exampleInputEmail1" className="form-label">Email</label>
                                                <input type="email" className="form-control" id="exampleInputEmail1" value={Email} onChange={(e) => setEmail(e.target.value)} valaria-describedby="emailHelp"/>
                                            </div>
                                            <div className="mb-4">
                                                <label htmlFor="exampleInputPassword1" className="form-label">Password</label>
                                                <input type="password" className="form-control" value={Password} onChange={(e) => setPassword(e.target.value)} id="exampleInputPassword1"/>
                                            </div>
                                            <div className="text-center">
                                                <button type="submit" className="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" onClick={handleClick}>Sign In</button>
                                            </div>
                                        </form>
                                        <div className="d-flex align-items-center justify-content-center">
                                            <p className="fs-4 mb-0 fw-bold">New to Modernize?</p>
                                            <a className="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default Login;