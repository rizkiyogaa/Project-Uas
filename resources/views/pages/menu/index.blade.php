@extends('layouts.main')

@section('title', 'Manage Religion Settings')
@section('content')

<div class="row">
    <div class="col-auto mb-4">
        <a href="{{ route('settings.religion.create') }}" class="btn add-btn">
            <i class="fa fa-plus"></i> Add new data
        </a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item">
                        <a href="{{ route('settings.religion.index') }}"
                            class="nav-link {{ Request::get('view') != 'trash' ? 'active' : '' }}">
                            All&nbsp;
                            <span class="badge badge-primary">{{ $lookupCount }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?view=trash" class="nav-link {{ Request::get('view') == 'trash' ? 'active' : '' }}">
                            Trash&nbsp;
                            <span class="badge badge-danger">{{ $trash->count() }}</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table no-footer mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th width="10%">No</th>
                                        <th>Name</th>
                                        <th>Translation (ID)</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lookups as $lookup)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lookup->name_en }}</td>
                                        <td>{{ $lookup->name_id }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" data-toggle="dropdown" aria-expanded="false"
                                                    class="action-icon dropdown-toggle">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    @if (!$lookup->trashed())
                                                    <a href="{{ route('settings.religion.edit', $lookup->hashid) }}"
                                                        class="dropdown-item">
                                                        <i class="fa fa-pencil m-r-5"></i> Edit
                                                    </a>
                                                    <button type="button" data-hashid="{{ $lookup->hashid }}"
                                                        data-method="delete" class="dropdown-item btn-swal text-danger">
                                                        <i class="fa fa-trash-o m-r-5"></i> Delete
                                                    </button>
                                                    @else
                                                    <button type="button" data-hashid="{{ $lookup->hashid }}"
                                                        data-method="put" class="dropdown-item btn-swal">
                                                        <i class="fa fa-reply m-r-5"></i> Restore
                                                    </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- form for delete & restore data --}}
<form action="" method="post">
    @csrf
    @method('get')
</form>
@endsection

@section('js')
<script>
    // Swal delete button & restore button
    $('body').on('click', '.btn-swal', function (event) {
        let $this = $(this),
            hashid = $this.data('hashid'),
            method = $this.data('method'),
            url = `{{ route('settings.religion.index') }}/${hashid}`,
            textSwal = method == 'delete' ?
            '@lang('
        company.sweetalert.text.delete ')': '@lang('
        company.sweetalert.text.restore ')';

        Swal.fire({
            title: '@lang('
            company.sweetalert.title ')',
            text: textSwal,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '@lang('
            company.sweetalert.button.ok ')',
            cancelButtonText: '@lang('
            company.sweetalert.button.cancel ')',
        }).then(result => {
            if (result.isConfirmed) {
                url += method !== 'delete' ? '/restore' : '';

                $('form').attr('action', url);
                $('form input[name=_method]').attr('value', method);
                $('form').submit();
            }
        });
    });

</script>
@endsection
