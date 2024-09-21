<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
        }
        .header, .footer {
            text-align: center;
        }
        .header h1 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .details, .items, .summary, .info {
            width: 100%;
            margin-bottom: 20px;
        }
        .details td, .items th, .items td, .summary td, .info td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        .items th {
            background-color: #f0f0f0;
        }
        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .signature-section div {
            width: 32%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Faktur Penjualan</h1>
            <p>INAURA</p>
            <p>Kawasan Sumantri, Husein Commercial TBF-1020, Al. Sudirman, Bekasi</p>
        </div>

        <!-- Details -->
        <table class="details">
            <tr>
                <td>
                    <strong>Kepada:</strong><br>
                    Putra Intan Salon<br>
                    Jl. Kubu Iwa No. 3x, Gianyar Bali 80511<br>
                    Indonesia
                </td>
                <td>
                    <strong>Tanggal:</strong> 13 Juni 2024<br>
                    <strong>Nomor:</strong> SL2024-06-01593<br>
                    <strong>Pengiriman:</strong> FOB<br>
                    <strong>Term:</strong> C.O.D<br>
                </td>
            </tr>
        </table>

        <!-- Items -->
        <table class="items">
            <tr>
                <th>Kode Barang</th>
                <th>No. Batch</th>
                <th>Nama Barang</th>
                <th>Kuantitas</th>
                <th>Harga @</th>
                <th>Total Harga</th>
            </tr>
            <tr>
                <td>FC-30956417</td>
                <td>24100050A</td>
                <td>Inaura Vitamin Drop Colored (blue)</td>
                <td>8</td>
                <td>Rp 10.000</td>
                <td>Rp 2.160.000</td>
            </tr>
            <tr>
                <td>FG-30952417</td>
                <td>23110R05A</td>
                <td>Inaura Vitamin Drop Colored (orange)</td>
                <td>8</td>
                <td>Rp 10.000</td>
                <td>Rp 2.160.000</td>
            </tr>
        </table>

        <!-- Summary and Additional Info -->
        <table class="summary">
            <tr>
                <td><strong>Sub Total</strong></td>
                <td>Rp 6.482.103</td>
            </tr>
            <tr>
                <td><strong>Diskon (15%)</strong></td>
                <td>Rp 972.310</td>
            </tr>
            <tr>
                <td><strong>PPN (11%)</strong></td>
                <td>Rp 715.837</td>
            </tr>
            <tr>
                <td><strong>Biaya Lain-lain</strong></td>
                <td>Rp 0</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td>Rp 5.508.000</td>
            </tr>
            <tr>
                <td><strong>Terbilang:</strong></td>
                <td>Lima juta lima ratus delapan ribu rupiah</td>
            </tr>
        </table>

        <!-- Payment Information -->
        <p>Pembayaran mohon ditransfer ke:</p>
        <p>
            CV INAURA ANUGERAH<br>
            Bank: BNI<br>
            No. Rek: 0388-11100-237082
        </p>
        <p>
            Kirim bukti transfer via WhatsApp: 0815-5848-4525
        </p>

        <!-- Signatures -->
        <div class="signature-section">
            <div>
                Disiapkan Oleh<br>
                <br><br>
                (Fakri)<br>
                Tgl: _______
            </div>
            <div>
                Disetujui Oleh<br>
                <br><br>
                (_________)<br>
                Tgl: _______
            </div>
            <div>
                Dikirim Oleh<br>
                <br><br>
                (_________)<br>
                Tgl: _______
            </div>
        </div>
    </div>
</body>
</html>
