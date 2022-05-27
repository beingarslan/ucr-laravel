@extends('layouts.master-layout')

@section('content')



<!-- Add computer form modal  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddComputer" aria-labelledby="modalAddComputer" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Add Computers</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form method="POST" enctype="multipart/form-data" action="{{ route('computer.store') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Brand" name="brand_id" required>
                            <option selected>Select a Brand</option>
                            @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach

                        </select>
                        <label for="floatingSelect">Brands</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="model" class="form-control rounded-4" id="floatingInput" placeholder="Model" required>
                        <label for="floatingInput">Model Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="image" class="form-control rounded-4" id="floatingInput" placeholder="Choose Image of Computer" required>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="operating_system" class="form-control rounded-4" id="floatingInput" placeholder="Operating System" required>
                        <label for="floatingInput">Operating System</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="display_size" class="form-control rounded-4" id="floatingInput" placeholder="Display size" required>
                        <label for="floatingInput">Display Size</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="ram" class="form-control rounded-4" id="floatingInput" min="2" max="128" required>
                        <label for="floatingInput">RAM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="usb_ports" class="form-control rounded-4" id="floatingInput" min="4" max="30" required>
                        <label for="floatingInput">USB Ports</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="hdmi_ports" class="form-control rounded-4" id="floatingInput" min="1" max="10" required>
                        <label for="floatingInput">HDMI Ports</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="rental_price" class="form-control rounded-4" id="floatingInput" placeholder="Model" required>
                        <label for="floatingInput">Rental Price/Hour</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="add">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add computer form modal end  -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddComputer">
    Add Computer
</button>

<!-- Computer list -->
<div class="container">
    <div class="row">
        @foreach($computers as $computer)
        <div class="card col-md-3">
            <img src=" {{ asset($computer->image) }} " class="card-img-top p-1" alt="computer image">
            <div class="card-body">
                <h5 class="card-title"></h5>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">OS: {{$computer->operating_system}} </li>
                <li class="list-group-item">Display Size: inch: {{$computer->display_size}}</li>
                <li class="list-group-item">RAM: {{$computer->ram}} GB</li>
                <li class="list-group-item">USB Ports: {{$computer->usb_ports}}</li>
                <li class="list-group-item">HDMI Ports: {{$computer->hdmi_ports}} </li>
                <li class="list-group-item">Rental Price/Hour : {{$computer->rental_price}} $</li>
            </ul>
            <div class="card-body">
                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalEditComputer{{$computer->id}}">Edit</button>
                <!-- Edit Computer Modal form  -->
                <div class="modal fade" tabindex="-1" role="dialog" id="modalEditComputer{{$computer->id}}" aria-labelledby="modalAddComputer" aria-hidden="true">
                    @csrf 
                    <input type="hidden" name="computer_id" value="{{$computer->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-5 shadow">
                            <div class="modal-header p-5 pb-4 border-bottom-0">
                                <!-- <h5 class="modal-title">Modal title</h5> -->
                                <h2 class="fw-bold mb-0">Edit</h2>
                                <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body p-5 pt-0">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('computer.update') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="Brand" name="brand_id" required>
                                            <option selected>Select a Brand</option>
                                            @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $computer->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                            @endforeach

                                        </select>
                                        <label for="floatingSelect">Brands</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="model" class="form-control rounded-4" id="floatingInput" placeholder="Model" required value="{{$computer->model}}">
                                        <label for="floatingInput">Model Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="operating_system" class="form-control rounded-4" id="floatingInput" placeholder="Operating System" required value="{{$computer->operating_system}}">
                                        <label for="floatingInput">Operating System</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="display_size" class="form-control rounded-4" id="floatingInput" placeholder="Display size" required value="{{$computer->display_size}}">
                                        <label for="floatingInput">Display Size</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="ram" class="form-control rounded-4" id="floatingInput" min="2" max="128" required value="{{$computer->ram}}">
                                        <label for="floatingInput">RAM</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="usb_ports" class="form-control rounded-4" id="floatingInput" min="4" max="30" required value="{{$computer->usb_ports}}">
                                        <label for="floatingInput">USB Ports</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="hdmi_ports" class="form-control rounded-4" id="floatingInput" min="1" max="10" required value="{{$computer->hdmi_ports}}">
                                        <label for="floatingInput">HDMI Ports</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="rental_price" class="form-control rounded-4" id="floatingInput" placeholder="Model" required value="{{$computer->rental_price}}">
                                        <label for="floatingInput">Rental Price/Hour</label>
                                    </div>
                                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="add">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit computer Modal form end  -->
                <form action="{{route('computer.delete')}}" method="post">
                    @csrf 
                    <input type="hidden" name="computer_id" value="{{$computer->id}}">
                <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection