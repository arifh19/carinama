@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Excel Import Identifikasi</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{route('import_identifikasi')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('excel_file') ? ' has-error' : '' }}">
                                <label for="excel_file" class="col-md-4 control-label">Import Identifikasi</label>

                                <div class="col-md-6"> 
                                    <input id="excel_file" type="file" class="form-control" name="excel_file" required>

                                    @if ($errors->has('excel_file'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('excel_file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                            </div>
              

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Proses
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection
