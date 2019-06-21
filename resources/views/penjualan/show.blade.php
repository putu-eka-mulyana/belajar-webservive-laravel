@extends('layout.app')
@section('main')
    <div class="row">
        <div class="col-md-12">
            <h2>penjualan detail</h2>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                tambah
            </button>
            <h5>Nama Pelanggan</h5>
            <h5>Tanggal</h5>
            <table class="table table-bordered">
                <tr>
                    <td>Nama Barang</td>
                    <td>Qty</td>
                    <td>Sub Total</td>
                    <td>aksi</td>
                </tr>
            </table>
            <h5>
                <strong>
                    Total Harga : Rp
                </strong>
            </h5>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>
@endsection