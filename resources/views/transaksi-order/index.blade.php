@extends('layouts.app')

@section('content')
<div className="container-fluid">
    <div className="row">
        <div className="col-lg-12">
            <div className="card">
                <div className="card-header bg-light-primary">
                    <h3>Transaksi Order</h3>
                    <nav aria-label="breadcrumb">
                        <ol className="breadcrumb">
                            <li className="breadcrumb-item"><Link to='/'>Home</Link></li>
                            <li className="breadcrumb-item active" aria-current="page">Transaksi Order</li>
                        </ol>
                    </nav>
                </div>
                <div className="card-body">
                    <div className="row">
                        <div className="col-lg-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i className="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1"/>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="d-flex justify-content-end">
                                <button type="button" className="btn btn-info"><i className="ti ti-plus"></i> Tambah Konsumen</button>
                            </div>
                        </div>
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
                                                <h6 className="fw-semibold mb-0">Kode Konsumen</h6>
                                            </td>
                                            <td>
                                                <h6 className="fw-semibold mb-0">Nama Konsumen</h6>
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
                                            <td>KSN-001</td>
                                            <td>Candra</td>
                                            <td>08123456789</td>
                                            <td>
                                                <Link to="/transaksi-order/casier" className="btn btn-secondary"><i class="ti ti-plus"></i> Order</Link>
                                                {{-- <button className="btn btn-sm btn-success"></button> --}}
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