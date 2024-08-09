@extends('app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
            <h4 class="card-title">Documents</h4>
        </div>
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-light p-2">
                <div class="card">
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <i class="bi bi-file-earmark-text"></i> Document for presentation
                            <span class="d-block text-muted small">1 March, 2017</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <i class="bi bi-file-earmark-text"></i> Presentation
                            <span class="d-block text-muted small">14 February, 2017</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <i class="bi bi-file-image"></i> 1_layout_preview.png
                            <span class="d-block text-muted small">15 February, 2017</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="col-md-9 p-3">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <button class="btn btn-secondary mr-2 mb-2 justify-content-end align-items-end"><i class="bi bi-upc-scan"></i> Scan Document</button>
                    <input type="file"  name="document" class="btn btn-secondary mb-2" />
                </div>
                <div class="card">
                    <div class="card-body">
                        <object data="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf" type="application/pdf" width="100%" height="500px">
                            <p><a href="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf"></a></p>
                        </object>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
