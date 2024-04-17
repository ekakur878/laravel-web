@extends('layouts.main')

@section('container')
 <!-- Page content -->
                    <div class="main-content">
                <form id="form-hitung">
                        <div class="row text-bg-secondary">
                            <h1>SUHU</h1>
                        </div>
                    <div class="row">
                        <label for="celsius"><b>Celsius</b></label>
                        <input type="number" id="celsius" placeholder="Masukan Angka" oninput="convertTemperature(this.value, 'celsius')">
                    </div>
                    <div class="row">
                        <label for="fahrenheit"><b>Fahrenheit</b></label>
                        <input type="number" id="fahrenheit" placeholder="Masukan Angka" oninput="convertTemperature(this.value, 'fahrenheit')">
                    </div>
                    <div class="row">
                        <label for="reaumur"><b>Reaumur</b></label>
                        <input type="number" id="reaumur" placeholder="Masukan Angka" oninput="convertTemperature(this.value, 'reaumur')">
                    </div>
                    <div class="row">
                        <label for="kelvin"><b>Kelvin</b></label>
                        <input type="number" id="kelvin" placeholder="Masukan Angka" oninput="convertTemperature(this.value, 'celsius')">
                    </div>
                    <div class="row">
                        <button type="reset" onclick="resetForm()" class="btn">Reset</button>
                    </div>
                </form>
            </div>
@endsection
