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
            <p>{{ settings()->company_name }}</p>
            <p>{{ settings()->company_address }}</p>
        </div>

        <!-- Details -->
        <table class="details">
            <tr>
                <td>
                    <strong>Kepada:</strong><br>
                    {{ $sale->customer_name }}<br>
                    {{ $sale->customer_address }}<br>
                </td>
                <td>
                    <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($sale->date)->format('d M, Y') }}<br>
                    <strong>Nomor:</strong> {{ $sale->reference }}<br>
                    <!-- <strong>Pengiriman:</strong> FOB<br>
                    <strong>Term:</strong> C.O.D<br> -->
                </td>
            </tr>
        </table>

        <!-- Items -->
        <table class="items">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kuantitas</th>
                <th>Harga @</th>
                <th>Total Harga</th>
            </tr>
            @foreach($sale->saleDetails as $saleDetail)
            <tr>
                <td>{{ $saleDetail->product->product_code }}</td>
                <td>{{ $saleDetail->product->product_name }}</td>
                <td>{{ $saleDetail->quantity }}</td>
                <td>{{ format_currency($saleDetail->price) }}</td>
                <td>{{ format_currency($saleDetail->sub_total) }}</td>
            </tr>
            @endforeach
        </table>

        <!-- Summary and Additional Info -->
        <table class="summary">
            <tr>
                <td><strong>Sub Total</strong></td>
                <td>{{ format_currency($sale->paid_amount) }}</td>
            </tr>
            <tr>
                <td><strong>Diskon @if($sale->discount_percentage) (15%) @endif</strong></td>
                <td>{{ format_currency($sale->discount_amount) }}</td>
            </tr>
            @if($sale->tax_percentage)
            <tr>
                <td><strong>Tax ({{ $sale->tax_percentage }}%)</strong></td>
                <td>{{ format_currency($sale->tax_amount) }}</td>
            </tr>
            @endif
            <tr>
                <td><strong>Total</strong></td>
                <td>{{ format_currency($sale->total_amount) }}</td>
            </tr>
            <!-- <tr>
                <td><strong>Terbilang:</strong></td>
                <td>Lima juta lima ratus delapan ribu rupiah</td>
            </tr> -->
        </table>

        <!-- Payment Information -->
        <p>Pembayaran mohon ditransfer ke:</p>
        <p>
            Pande Nyaman Putra Widiantara<br>
            Bank: BCA<br>
            No. Rek: 4160732682
        </p>
        <p>
            Kirim bukti transfer via WhatsApp: 0887-3442-033
        </p>

        <!-- Signatures -->
        <table class="summary" style="border-collapse: collapse;">
            <tr>
                <td style="text-align: center;"><strong>Disiapkan oleh</strong></td>
                <td style="text-align: center;"><strong>Disetujui oleh</strong></td> 
                <td style="text-align: center;"><strong>Dikirim oleh</strong></td> 
            </tr>
            <tr>
                <td>&nbsp;<br><br><br></td>
                <td>&nbsp;<br><br><br></td> 
                <td>&nbsp;<br><br><br></td> 
            </tr>
        </table>
    </div>
</body>
</html>
