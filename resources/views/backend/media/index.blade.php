@extends("backend.layouts.layout")
@section("css")

@endsection
@section("content")
    <div class="card p-4">

        <div class="row">
            <div class="col-md-4">
                <h5>Media</h5>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
                <a class="btn btn-success mb-3 " style="width: max-content" href="{{route("media.create").'?class='.request()->class.'&id='.request()->id}}">Team Create</a>
            </div>
        </div>
        <table id="banner" class="w-100 mb-2 table table-sm table-striped table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
    </div>
@endsection

@push("js")
    <script>
        $('#banner').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('admin.media.getMedia',) }}",
                "type": "POST",
                "data": function(d) {
                    d._token = '{{ csrf_token() }}';
                    d.id='{{request()->id}}';
                    d.class='{{request()->class}}';
                }
            },
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Azerbaijan.json"
            },
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "created_at" },
                { "data": "action" },
            ]
        });
    </script>
@endpush
