@extends('layouts.master-layout')

@section('content')

<!-- Edit Computer Modal form  -->
<div class="modal modal-signin position-static bg-secondary py-5 <?= $edit ? 'd-block' : 'd-none' ?>" tabindex="-1" role="dialog" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">Edit <?= $computer['model'] ?></h2>
                <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-5 pt-0">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Brand" name="brand_id" required>
                            <option selected>Select a Brand</option>
                            <option value="">name</option>
                        </select>
                        <label for="floatingSelect">Brands</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="model" class="form-control rounded-4" id="floatingInput" placeholder="Model" value="" required>
                        <label for="floatingInput">Model Name</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="image" class="form-control rounded-4" id="floatingInput" placeholder="Choose Image of Computer">
                        <input type="hidden" name="old_image" value="">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="os" class="form-control rounded-4" id="floatingInput" placeholder="Operating System" value="" required>
                        <label for="floatingInput">Operating System</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="display_size" class="form-control rounded-4" id="floatingInput" placeholder="Display size" value="" required>
                        <label for="floatingInput">Display Size</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="ram" class="form-control rounded-4" id="floatingInput" min="2" max="128" value="" required>
                        <label for="floatingInput">RAM</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="usb" class="form-control rounded-4" id="floatingInput" min="4" max="30" value="" required>
                        <label for="floatingInput">USB Ports</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="hdmi" class="form-control rounded-4" id="floatingInput" min="1" max="10" value="" required>
                        <label for="floatingInput">HDMI Ports</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="rental_price" class="form-control rounded-4" id="floatingInput" placeholder="Model" value="" required>
                        <label for="floatingInput">Rental Price/Hour</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="update" value="">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit computer Modal form end  -->

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
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Brand" name="brand_id" required>
                            <option selected>Select a Brand</option>

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
                        <input type="text" name="os" class="form-control rounded-4" id="floatingInput" placeholder="Operating System" required>
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
                        <input type="number" name="usb" class="form-control rounded-4" id="floatingInput" min="4" max="30" required>
                        <label for="floatingInput">USB Ports</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" name="hdmi" class="form-control rounded-4" id="floatingInput" min="1" max="10" required>
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

<!-- Computer list -->
<div class="container">
    <div class="row">

        <div class="card col-md-3">
            <img src="" class="card-img-top p-1" alt="computer image">
            <div class="card-body">
                <h5 class="card-title"></h5>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">OS: </li>
                <li class="list-group-item">Display Size: inch</li>
                <li class="list-group-item">RAM: GB</li>
                <li class="list-group-item">USB Ports: </li>
                <li class="list-group-item">HDMI Ports: </li>
                <li class="list-group-item">Rental Price/Hour : $</li>
            </ul>
            <div class="card-body">
                <a href="master-computer-list.php?edit=" class="card-link"><input type="button" class="btn btn-info" value="Edit"></a>
                <a href="master-computer-list.php?delete=" class="card-link"><input type="button" class="btn btn-danger" value="Delete"></a>
            </div>
        </div>

    </div>
</div>

@endsection