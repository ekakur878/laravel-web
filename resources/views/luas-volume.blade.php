@extends('layouts.main') 

@section('container')
        <!-- Page content -->
        
            <div class="main-content">
                <form id="form-hitung" onsubmit="return hitung()">
                        <div class="row text-bg-secondary">
                            <h1>BALOK</h1>
                        </div>
                    <div class="row">
                        <label for="tinggi"><b>Tinggi</b></label>
                        <input type="number" id="tinggi" placeholder="Masukan Angka">
                    </div>
                    <div class="row">
                        <label for="lebar"><b>Lebar</b></label>
                        <input type="number" id="lebar" placeholder="Masukan Angka">
                    </div>
                    <div class="row">
                        <label for="panjang"><b>Panjang</b></label>
                        <input type="number" id="panjang" placeholder="Masukan Angka">
                    </div>
                    <div class="row" id="hasil">
                        <p><b>Luas Permukaan : </b><span id="luas"> </span></p>
                        <p><b>Volume : </b><span id="volume"> </span></p>
                    </div>
                    <div class="row">
                        <button type="reset" onclick="resetForm()" class="btn reset-btn">Reset</button>
                        <button type="submit" class="btn hitung-btn">Hitung</button>
                    </div>
                </form>
            </div>
@endsection