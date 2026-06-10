<div class="modal fade " id="customer{{ $customer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        {{ $customer->name }}
                    </div>
                    <div class="col-md-12">
                        {{ $customer->email }}
                    </div>
                    <div class="col-md-12">
                        {{ $customer->gender }}
                    </div>
                    <div class="col-md-12">
                        {{ $customer->created_at }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Scrollable modal -->
<div class="">
  ...
</div>