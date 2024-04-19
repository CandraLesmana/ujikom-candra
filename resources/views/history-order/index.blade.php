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
                                                <h6 className="fw-semibold mb-0">Tanggal</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Nama Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Jenis Layanan</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Berat</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Jenis Pembayaran</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Total</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Status</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Action</h6>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>22-Maret-2024</td>
                                            <td>Candra</td>
                                            <td>Laundry Kiloan</td>
                                            <td>3,4 Kg</td>
                                            <td>Cash</td>
                                            <td>Rp 24.000</td>
                                            <td><span className="badge bg-warning">Dalam Proses</span></td>
                                            <td>
                                                <div className="btn-group" role="grup" aria-label="Basic Example">
                                                    <button className="btn btn-sm btn-info"><i className="ti ti-edit"></i> Edit</button>
                                                    <button className="btn btn-sm btn-danger"><i className="ti ti-trash"></i> Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>22-Maret-2024</td>
                                            <td>Candra</td>
                                            <td>Laundry Kiloan</td>
                                            <td>3,4 Kg</td>
                                            <td>Cash</td>
                                            <td>Rp 24.000</td>
                                            <td><span className="badge bg-danger">Belum Bayar</span></td>
                                            <td>
                                                <div className="btn-group" role="grup" aria-label="Basic Example">
                                                    <button className="btn btn-sm btn-info"><i className="ti ti-edit"></i> Edit</button>
                                                    <button className="btn btn-sm btn-danger"><i className="ti ti-trash"></i> Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>22-Maret-2024</td>
                                            <td>Candra</td>
                                            <td>Laundry Kiloan</td>
                                            <td>3,4 Kg</td>
                                            <td>Cash</td>
                                            <td>Rp 24.000</td>
                                            <td><span className="badge bg-success">Selesai</span></td>
                                            <td>
                                                <div className="btn-group" role="grup" aria-label="Basic Example">
                                                    <button className="btn btn-sm btn-info"><i className="ti ti-edit"></i> Edit</button>
                                                    <button className="btn btn-sm btn-danger"><i className="ti ti-trash"></i> Delete</button>
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