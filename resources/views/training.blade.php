@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Excel Import</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('import_parse')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('csv_file') ? ' has-error' : '' }}">
                                <label for="csv_file" class="col-md-4 control-label">Excel file to import</label>

                                <div class="col-md-6"> 
                                    <input id="csv_file" type="file" class="form-control" name="csv_file" required>

                                    @if ($errors->has('csv_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('csv_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Klasifikasi daerah</label>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">+</button>
                                <div class="col-md-6"> 
                                    <select name="jenis" class="form-control select2">
                                    @foreach($klasifikasi as $kl)
                                        <option value="{{$kl->nama}}">{{$kl->nama}}</option>
                                    @endforeach
                                    </select>
                                </div>

                            </div>
                        
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Training
                                    </button>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Klasifikasi Daerah</h4>
                </div>
             <form class="form-horizontal" method="POST" action="{{route('tambah_daerah')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group{{ $errors->has('daerah') ? ' has-error' : '' }}">
                        <label for="daerah" class="col-md-4 control-label">Klasifikasi Daerah</label>
                        <div class="col-md-6"> 
                            <input class="form-control" name="daerah" required>
                        </div>            
                    </div>
                
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
            <!-- /.modal-content -->
    </div>
          <!-- /.modal-dialog -->
@endsection
@section('scripts')
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
@endsection
