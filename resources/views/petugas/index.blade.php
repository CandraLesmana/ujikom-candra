@extends('layouts.app')

@section('content')
    <div className="container-fluid">
        <div className="row">
            <div className="col-lg-12">
                <div className="card">
                    <div className="card-header bg-light-primary">
                        <h3>Data Petugas</h3>
                        <nav aria-label="breadcrumb">
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item"><a href="#">Home</a></li>
                                <li className="breadcrumb-item active" aria-current="page">Petugas</li>
                            </ol>
                        </nav>
                    </div>
                    <div className="card-body">
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
                                                    <h6 className="fw-semibold mb-0">Nama Pegawai</h6>
                                                </td>
                                                <td>
                                                    <h6 className="fw-semibold mb-0">Email</h6>
                                                </td>
                                                <td>
                                                    <h6 className="fw-semibold mb-0">No HP</h6>
                                                </td>
                                                <td>
                                                    <h6 className="fw-semibold mb-0">Action</h6>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Candra</td>
                                                <td>candra123@gmail.com</td>
                                                <td>08123456789</td>
                                                <td>
                                                    <div className="btn-group" role="grup" aria-label="Basic Example">
                                                        <button className="btn btn-sm btn-info"><i class="ti ti-edit"></i> Edit</button>
                                                        <button className="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
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