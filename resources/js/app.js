import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { createRoot } from 'react-dom/client';
import Layout from './layouts/index';
import Dashboard from './pages/dashboard';
import Petugas from './pages/petugas';
import Login from './pages/auth/login';
import Register from './pages/auth/register';
import JenisLayanan from './pages/jenis-layanan';
import JenisPembayaran from './pages/jenis-pembayaran';
import Konsumen from './pages/konsumen';
import TransaksiOrder from './pages/transaksi-order';
import Casier from './pages/transaksi-order/casier';
import HistoryOrder from './pages/history-order';
import Main from '.';

function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path='/register' element={<Register />} />
                <Route path="/login" element={<Login />} />
                <Route path="/" element={<Main />} />
                <Route path="/home" element={<Layout />}>
                    <Route index element={<Dashboard />} />
                    <Route path="petugas" element={<Petugas />} />
                    <Route path="jenis-layanan" element={<JenisLayanan />} />
                    <Route path="jenis-pembayaran" element={<JenisPembayaran />} />
                    <Route path="konsumen" element={<Konsumen />} />
                    <Route path="transaksi-order" element={<TransaksiOrder />} />
                    <Route path="transaksi-order/casier" element={<Casier />} />
                    <Route path="history-order" element={<HistoryOrder />} />
                </Route>
            </Routes>
        </BrowserRouter>
    );
}

// Menggunakan createRoot untuk menge-render komponen App ke root DOM
createRoot(document.getElementById('root')).render(<App />);
