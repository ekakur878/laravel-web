@extends('layouts.main')

@section('container')
  <!-- Page content -->
        <div class="main-content">
            <form nonvalidate onSubmit="validasi()">
                <!-- title form -->
                <div class="row text-bg-secondary">
                    <h1>SILAHKAN PESAN</h1>
                </div>
                <!-- menu makanan-->
                <div class="row">
                    <div class="col">
                        <label for="makanan" class="form-label">Menu Makanan</label>
                        <select class="form-select" id="makanan">
                            <option selected>Pilih Makanan</option>
                            <option value="ricarica_biawak">Rica-Rica Biawak</option>
                            <option value="kreco">Kreco</option>
                            <option value="sate_kelinci">Sate Kelinci</option>
                            <option value="sate_bekicot">Sate Bekicot</option>
                            <option value="lontong_balap">Lontong Balap</option>
                        </select>
                    </div>
                    <!-- jumlah makanan -->
                    <div class="col">
                        <label for="jumlah_makanan" class="form-label">Porsi Makanan</label>
                        <input type="number" class="form-control" id="jumlah_makanan" min="1" value="1">
                    </div>
                    <div class="col d-flex align-items-end justify-content-center">
                        <div class="col">
                            <h5>Harga : </h5>
                        </div>
                        <div class="col" id="harga_makanan">
                            <h5>Rp. 0</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="checkbox" id="showDrinkMenu" name="showDrinkMenu">
                    <label for="showDrinkMenu">Tambah Minuman</label>
                </div>
                <!-- menu minuman -->
                <div class="row" id="drinkMenu" style="display: none;">
                    <div class="col">
                        <label for="minuman" class="form-label">Menu Minuman</label>
                        <select class="form-select" id="minuman">
                            <option selected>Pilih Minuman</option>
                            <option value="es_teh">Es Teh</option>
                            <option value="teh_tawar">Teh Tawar</option>
                            <option value="teh_anget">Teh Anget</option>
                            <option value="es_teh_anget">Es Teh Anget</option>
                            <option value="kopi_hitam">Kopi Hitam</option>
                        </select>
                    </div>
                    <!-- jumlah minuman -->
                    <div class="col">
                        <label for="jumlah_minuman" class="form-label">Porsi Minuman</label>
                        <input type="number" class="form-control" id="jumlah_minuman" min="1" value="1">
                    </div>
                    <div class="col d-flex align-items-end justify-content-center">
                        <div class="col">
                            <h5>Harga : </h5>
                        </div>
                        <div class="col" id="harga_minuman">
                            <h5>Rp. 0</h5>
                        </div>
                    </div>
                </div>
                <!-- jumlah pesanan -->
                    <!-- bayar -->
                    <div class="row">
                        <!-- total -->
                        <div class="col">
                            <span class="col" id="total_harga">Total Harga : Rp. 0</span>   
                        </div>
                        <div class="col">
                            <label for="bayar_pesanan" class="form-label">Bayar Pesanan</label>
                            <input type="number" class="form-control" id="bayar_pesanan" value="0">
                        </div>
                        <!-- kembalian -->
                        <div class="col">
                            <h5>Kembalian : </h5>
                        </div>
                        <div class="col" id="sisa_kembalian">
                            <h5>Rp. 0</h5>
                        </div>
                    </div>
                    <!-- button pesan -->
                        <div class="col">
                            <button type="submit" class="btn btn-success">Pesan</button>
                        </div>
            </form>
        </div>
@endsection