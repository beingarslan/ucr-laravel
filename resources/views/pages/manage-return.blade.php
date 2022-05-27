


@extends('layouts.master-layout')

@section('content')
    <!-- confirm return modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Return Processing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <input type="hidden" id="insurance" name="insurance" value="">
                        <input type="hidden" id="computer_id" name="computer_id" value="">
                        <input type="hidden" id="user_id" name="user_id" value="">
                        <input type="hidden" id="rent_id" name="rent_id" value="">


                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="damagedCheck">
                            <label class="form-check-label" for="damagedCheck">
                                Damaged
                            </label>
                        </div>
                        <div id="additional" hidden>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Minor Damage
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Major Damage
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="charge" class="col-form-label">Additional Charge :</label>
                                <input type="number" class="form-control" id="charge" name="charge">
                            </div>

                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text" name="message"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- confirm return modal end  -->

    <!-- main content  -->
    <div class="container">
        <table class="table">
            <thead>
                <th scope="col">Computer</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <img src="" class="img-thumbnail" alt="thumbnail" width="200" height="200">
                                </div>
                                <div class="col-9">
                                    {{ $computer->name. ' - ' . $computer->model }}
                                    </br>OS : {{  $computer->operating_system }}
                                    </br>RAM : {{  $computer->ram }}
                                    </br>USB Ports : {{  $compter->rts }}
                                    </br>HDMI Ports : {{  $computer[->dmi_ports }}
                                </div>
                            </div>
                        </td>
                        <td>

                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-computer_id="" data-bs-insurance="" data-bs-user_id="" data-bs-rent_id="">Accept Return</button>

                        </td>
                    </tr>
             @endforeach
            </tbody>
        </table>
    </div>

    @endsection