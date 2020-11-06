@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Part PC Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('partpc.update', $partpc) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Part Name :</label>
                        <input type="text" class="form-control" value="{{$partpc->nama_item}}" name="nama_item" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Type :</label>
                        <input type="text" class="form-control" value="{{$partpc->tipe_item}}" name="tipe_item" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <input type="text" class="form-control" value="{{$partpc->deskripsi_item}}" name="deskripsi_item" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Brand :</label>
                        <select class="custom-select" name="brand_id" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($provider as $provider)
                                <option value="{{ $provider->id }}">{{$provider->merk_provider}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
