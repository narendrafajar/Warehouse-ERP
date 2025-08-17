<x-app-layout>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{__('Nota Faktur Penerimaan ')}} <i style="display: none">{{__('- ')}}</i></h4>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label for="" class="form-label">{{__('Tanggal Penerimaan')}}</label>
                            <input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima" readonly/>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                            <label for="" class="form-label">{{__('Tanggal Nota')}}</label>
                            <input type="date" class="form-control" id="tgl_nota" name="tgl_nota"/>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 mb-3">
                            <label for="selectSupplier" class="form-label">{{__('Pilih Supplier')}}</label>
                            <select name="selectSupplier" id="selectSupplier" class="form-control select2 w-100">
                                <option value="">{{__('Pilih Supplier')}}</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="nextRow">
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <label for="selectToko" class="form-label">{{__('Pilih Toko')}}</label>
                            <select name="selectToko" id="selectToko" class="form-control select2 w-100">
                                <option value="">{{__('Pilih Toko')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('additional_js')
    <script src="{{asset('warehouse/main-js/penerimaan.js')}}"></script>
    @endsection
</x-app-layout>