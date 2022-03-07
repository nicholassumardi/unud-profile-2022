@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif


@push('js')
<script>
    $(function() {
            $(".alert").delay(3000).slideUp(300);
        });

</script>
@endpush