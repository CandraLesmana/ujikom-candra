import React from "react";
import axios from "axios";
import Modal from "../../components/modal";
import { useState, useEffect } from "react";

function JenisLayanan() {
    const [data, setData] = useState([]);
    const [JenisLayanan, setJenisLayanan] = useState("");
    const [Harga, setHarga] = useState();
    const [showAlert, setShowAlert] = useState(false);
    const [response, setResponse] = useState({});

    const [jenisLayanan, setJenisLayananEdit] = useState(item.name);
    const [harga, setHargaEdit] = useState(item.price);


    // post data from api
    const handleJenisLayanan = async (e) => {
        e.preventDefault();
        try {
            const currentDomain = window.location.origin;
            const response = await axios.post(currentDomain + "/api/v1/jenis-layanan",{
                name: JenisLayanan,
                price: Harga,
            },{
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });
            console.log(response.data);
            setShowAlert(true);
            
            setData([...data, response.data.data]);

            setResponse(response.data);
            setTimeout(() => {
                setShowAlert(false);
            }, 5000); 

        } catch (error) {
            console.log(error.response.data.message);
        }
    }
    
    // upadate data from api
    const handleUpdate = async (id) => {
        try {
            const currentDomain = window.location.origin;
            const response = await axios.put(currentDomain + "/api/v1/jenis-layanan/" + id, {
                name: JenisLayanan,
                price: Harga,
            },{
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });
            console.log(response.data);
            setShowAlert(true);
            setData(data.map((item) => item.id === id ? response.data.data : item));
            setResponse(response.data);
            setTimeout(() => {
                setShowAlert(false);
            }, 5000);
        } catch (error) {
            console.log(error.response.data.message);
        }
    }

    // delete data from api
    const handleDelete = async (id) => {
        try {
            const currentDomain = window.location.origin;
            const response = await axios.delete(currentDomain + "/api/v1/jenis-layanan/" + id, {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem('token')}`
                }
            });
            console.log(response.data);
            setShowAlert(true);
            setData(data.filter((item) => item.id !== id));
            setResponse(response.data);
            setTimeout(() => {
                setShowAlert(false);
            }, 5000);
        } catch (error) {
            console.log(error.response.data.message);
        }
    }

    // get data from api
    useEffect(() => {
        const currentDomain = window.location.origin;
        axios.get(currentDomain + "/api/v1/jenis-layanan",{ 
            headers: { 
                Authorization: `Bearer ${localStorage.getItem('token')}` 
            } 
        })
        .then((response) => {
            setData(response.data.data);
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error.response.data.message);
        });
    }, []);

    return (
        <>
            <div className="container-fluid">
                <div className="row">
                    <div className="col-lg-12">
                        <div className="card">
                            <div className="card-header bg-light-primary">
                                <h3>Jenis Layanan</h3>
                                <nav aria-label="breadcrumb">
                                    <ol className="breadcrumb">
                                        <li className="breadcrumb-item"><a href="#">Home</a></li>
                                        <li className="breadcrumb-item active" aria-current="page">Jenis Layanan</li>
                                    </ol>
                                </nav>
                            </div>
                            <div className="card-body">                                
                                <div className="d-flex justify-content-end mb-2">
                                    <button type="button" className="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addJenisLayanan"> Tambah Jenis Layanan</button>

                                    <Modal nameModal={"addJenisLayanan"} handle={handleJenisLayanan}>
                                        <div className="mb-3">
                                            <label htmlFor="jenis_layanan" className="form-label">Jenis Layanan</label>
                                            <input type="text" className="form-control" id="jenis_layanan" name="jenis_layanan" onChange={(e) => setJenisLayanan(e.target.value)} />
                                        </div>
                                        <div className="mb-3">
                                            <label htmlFor="harga" className="form-label">Harga</label>
                                            <input type="number" className="form-control" id="harga" name="harga" onChange={(e) => setHarga(e.target.value)} />
                                        </div>
                                    </Modal>
                                </div>

                                {showAlert && <div className={`alert alert-${response.type}`} role="alert">{response.message}</div>}

                                <div className="row">
                                    <div className="col-lg-12">
                                        <div className="table-responsive">
                                            <table className="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <h6 className="fw-semibold mb-0">No</h6>
                                                        </td>
                                                        <td>
                                                            <h6 className="fw-semibold mb-0">Jenis Layanan</h6>
                                                        </td>
                                                        <td>
                                                            <h6 className="fw-semibold mb-0">Harga</h6>
                                                        </td>
                                                        <td>
                                                            <h6 className="fw-semibold mb-0">Action</h6>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                       {data.map((item, index) => (
                                                        <tr key={item.id}>
                                                            <td>{index + 1}</td>
                                                            <td>{item.name}</td>
                                                            <td>Rp {item.price.toLocaleString('id-ID', { maximumFractionDigits: 0 })}/ Kg</td>
                                                            <td>
                                                                <button type="button" className="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editJenisLayanan">Edit</button>
                                                                <Modal nameModal="editJenisLayanan" handle={() => handleUpdate(item.id)}>
                                                                    <div className="mb-3">
                                                                        <label htmlFor="jenis_layanan" className="form-label">Jenis Layanan</label>
                                                                        <input type="text" className="form-control" id="jenis_layanan" name="jenis_layanan" value={item.name} onChange={(e) => setJenisLayanan(e.target.value)} />
                                                                    </div>
                                                                    <div className="mb-3">
                                                                        <label htmlFor="harga" className="form-label">Harga</label>
                                                                        <input type="number" className="form-control" id="harga" name="harga" value={item.price} onChange={(e) => setHarga(e.target.value)} />
                                                                    </div>
                                                                </Modal>
                                                                <button type="button" className="btn btn-danger btn-sm" onClick={() => handleDelete(item.id)}>Delete</button>
                                                            </td>
                                                        </tr>
                                                       ))}                                               
                                                </tbody>
                                            </table>
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

export default JenisLayanan;