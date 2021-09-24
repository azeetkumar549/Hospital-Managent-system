@extends('Admin.base')
@section('add_doctor','active')

@section('content')


<div class="row m-t-30">
    <div class="col-md-6 mx-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h1 class="mb10">Add_Doctor</h1></div>
                    <div class="card-body">
                    <form action="{{route('add_doctor')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">User Name</label>
                                <input type="text" name="username" class="form-control">
                                @error('username')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                                @error('email')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Phone No</label>
                                <input type="number" name="phone_no" class="form-control">
                                @error('phone_no')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                    <label for="">Branch</label>
                                    <select type="text" name="addbranch_id" class="form-control">
                                        @foreach ($addbranches as $branch)
                                        <option value="{{$branch->id}}">{{$branch->branch_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
