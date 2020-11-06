@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Provider List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('providerpartpc.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Provider Part PC</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Provider Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($providerpartpc as $provider)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('providerpartpc.edit', $provider) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $provider->nama_provider }}</a></td>
                        <td>{{ $provider->merk_provider }}</td>

                        <td>
                            <form action="{{ route('providerpartpc.destroy', $provider) }}" method="post" onsubmit="return confirm('Are you sure? all the related data will also be deleted PERMANENT!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
