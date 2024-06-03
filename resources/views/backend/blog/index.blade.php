@extends("backend.layouts.layout")
@section("css")

     @endsection
@section("content")
    <div class="card p-4">

        <div class="row">
            <div class="col-md-4">
                <h5>Blog</h5>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
                <a class="btn btn-success mb-3 " style="width: max-content" href="{{route("blog.create")}}">Blog Create</a>
            </div>
        </div>
        <table id="banner" class="w-100 mb-2 table table-sm table-striped table-hover">
            <thead>
            <tr>
                <th> Id</th>
                <th> Image</th>
                <th> Title</th>
                <th>Slug</th>
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
                "url": "{{ route('admin.blog.getBlog',) }}",
                "type": "POST",
                "data": function(d) {
                    d._token = '{{ csrf_token() }}';
                }
            },
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Azerbaijan.json"
            },
            "columns": [
                { "data": "id" },
                { "data": "image" },
                { "data": "title" },
                { "data": "slug" },
                { "data": "created_at" },
                { "data": "action" },
            ]
        });
    </script>
    @endpush
