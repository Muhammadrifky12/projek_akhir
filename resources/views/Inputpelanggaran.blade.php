@extends('layout.admin')
@section('title', 'Input')
@section('content-title', 'Silahkan Memilih Kelas')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                <a href="" class="btn">
                    <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">10 RPL 1</h2>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                <a href="" class="btn">
                    <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">11 RPL 1</h2>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                    <a href="" class="btn" >
                        <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">12 RPL 1</h2>
                    </a>
            </div>
        </div>
        <hr>
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                <a href="" class="btn">
                    <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">10 RPL 2</h2>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                <a href="" class="btn">
                    <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">11 RPL 2</h2>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4" id="ll">
                <a href="" class="btn">
                    <h2 class="text-black text-center" style="font-family: 'Fragment Mono', monospace;">12 RPL 2</h2>
                </a>
            </div>
        </div>
    </div>
    <style>
        #ll {
            --angle: 0deg;
            border: 1rem solid;
            border-image: linear-gradient(var(--angle), #12c2e9, #c471ed, #f64f59) 1;
            animation: 5s rotate linear infinite;
        }

        @keyframes rotate {
            to {
                --angle: 360deg;
            }
        }

        @property --angle {
            syntax: '<angle>';
            initial-value: 0deg;
            inherits: false;
        }
    </style>
@endsection
