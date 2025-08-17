<x-app-layout>
    <div class="row">
        <div class="col-sm-12 col-lg-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-rounded btn-primary btn-icon-text" style="float: right" data-bs-toggle="modal" data-bs-target="#modalPenerimaan">
                        <i class="typcn typcn-input-checked btn-icon-prepend"></i>
                        {{__('Buat Form Penerimaan')}}
                    </button>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{__('Master Penerimaan')}}</h4>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalPenerimaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalPenerimaan">{{__('Buat Penerimaan Baru')}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-6">
                <label for="" class="form-label">{{__('Tanggal Diterima')}}</label>
                <input type="date" class="form-control" name="tgl_terima" id="tgl_terima" placeholder="Masukkan Tanggal Terima">
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="form-control-plaintext"><i class="text-small text-danger" id="errorDate" style="display:none"></i></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-rounded btn-icon-text" data-bs-dismiss="modal">
            <i class="typcn typcn-delete btn-icon-prepend"></i>
            {{__('Batalkan')}}
        </button>
        <button type="button" class="btn btn-success btn-rounded btn-icon-text" onclick="saveDate()">
            <i class="typcn typcn-tick-outline btn-icon-prepend"></i>
            {{__('Lanjutkan Pembuatan Nota')}}
        </button>
      </div>
    </div>
  </div>
</div>
@section('additional_js')
<script src="{{asset('warehouse/main-js/penerimaan.js')}}"></script>
@endsection
</x-app-layout>