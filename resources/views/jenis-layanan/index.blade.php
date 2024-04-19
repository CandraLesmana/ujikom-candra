@extends('layouts.app')

@section('content')
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
                    </div>

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
@endsection