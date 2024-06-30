<div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card border-primary">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Transaksi</h4>
                        <table class="table table-bordered">

                            <thead>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>No. Invoice</th>
                                <th>Total</th>
                            </thead>
                            <tbody>
                                @foreach ($semuaTransaksi as $transaksi)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $transaksi->created_at }} </td>
                                        <td> {{ $transaksi->kode }} </td>
                                        <td>Rp. {{ number_format($transaksi->total, 2, ',', '.') }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <a href="{{ url('/cetak') }}" target="_blank">Cetak</a>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
