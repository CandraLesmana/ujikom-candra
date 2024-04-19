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
                                <li className="breadcrumb-item"><a href='/'>Home</a></li>
                                <li className="breadcrumb-item"><a href="/transaksi-order">Transaksi Order</a></li>
                                <li className="breadcrumb-item active" aria-current="page">Konsumen : <span className="fw-semibold">Candra</span></li>
                            </ol>
                        </nav>
                    </div>
                    <div className="card-body">
                        <div className="row gx-5">
                            <div className="col-lg-6">
                                <div className="form-group mb-3">
                                    <label for="">Jenis Laundry / Layanan</label>
                                    <select className="form-select">
                                        <option>-- Pilih Jenis --</option>
                                    </select>
                                </div>
                                <div className="form-group my-3">
                                    <label for="">Berat (KG)</label>
                                    <input type="number" className="form-control" placeholder="Berat Laundry"/>
                                </div>
                                <div className="form-group my-3">
                                    <label for="">Jenis Pembayaran</label>
                                    <select className="form-select">
                                        <option>-- Pilih Jenis --</option>
                                    </select>
                                </div>
                                <div className="d-flex justify-content-center">
                                    <div class="btn-group my-3" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" value={1} id="btnradio1" autocomplete="off"/>
                                        <label class="btn btn-outline-primary px-5" for="btnradio1">Bayar Diawal</label>

                                        <input type="radio" class="btn-check" name="btnradio" value={2} id="btnradio2" autocomplete="off"/>
                                        <label class="btn btn-outline-primary px-5" for="btnradio2">Bayar Diakhir</label>
                                    </div>
                                </div>
                            </div>
                            <div className="col-lg-6">
                                <div className="card">
                                    <div className="card-header bg-light-primary">
                                        <div className="text-center">
                                            <h4 className="fw-semibold">Detail Transaksi</h4>
                                        </div>
                                    </div>
                                    <div className="card-body">
                                        <p>Detail Konsumen :</p>
                                        <div className="d-flex justify-content-between">
                                            <h6 className="fw-semibold">Candra</h6>
                                            <h6 className="fw-semibold">081234567890</h6>
                                        </div>
                                        <hr/>
                                        <div className="d-flex justify-content-between">
                                            <p>21-Maret-2024</p>
                                            <p>Kode : <span className="fw-semibold">KSN-001</span></p>
                                        </div>
                                    </div>
                                    <div className="card-footer bg-primary">
                                        <div className="d-flex justify-content-between">
                                            <h5 className="text-white">Total : <span className="fw-semibold">Rp. 0</span></h5>
                                            <button type="button" className="btn btn-secondary"><i class="ti ti-cash fs-5"></i>Bayar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection