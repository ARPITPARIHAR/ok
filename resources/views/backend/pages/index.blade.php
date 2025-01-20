@extends('backend.layouts.app')
@section('meta_title',__('Pages'))

@section('page_name',__('Pages'))

@section('page_description',__('Pages'))
@section('name')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">{{ __('Pages') }}</a>
    </li>
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header row">
                <div class="col-sm-2">
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-sm btn-primary">{{ __('Add Page') }}</a>
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Parent Page') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Level') }}</th>
                                <th>{{ __('Featured') }}</th>
                                <th>{{ __('Page Url') }}</th>
                                <th>{{ __('Header Image') }}</th>
                                {{-- <th>{{ __('Slug') }}</th> --}}
                                <th>{{ __('Updated At') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $key=>$page)
                            <tr>
                                <td>{{ ($key+1) + ($pages->currentPage() - 1)*$pages->perPage() }}</td>
                                <td>{{ optional($page->parent)->name ?? '' }}</td>
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->level }}</td>
                                <td>
                                    <input type="checkbox" class="js-small f-right"  value="1" onchange="featuredUnfeatured(this,'{{encrypt($page->id)}}')" @if($page->featured) checked="" @endif>
                                </td>
                                <td>
                                    <a onclick="copyToClipboard('{{ route('page',$page->slug) }}','{{encrypt($page->id)}}')" href="#">{{ route('page',$page->slug) }}</a>
                                    <p class="text-muted" id="copyed-text-{{encrypt($page->id)}}"></p>
                                </td>
                                <td><img src="{{ asset($page->header_img) }}" width="150"></td>
                                {{-- <td>{{ $page->slug }}</td> --}}
                                <td>{{ date('d-m-Y h:iA',strtotime($page->updated_at)) }}</td>
                                <td>
                                    <a href="{{ route('admin.pages.edit',encrypt($page->id)) }}" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                    @if ($page->level!=0)
                                        <a href="{{ route('admin.pages.delete',encrypt($page->id)) }}" class="btn btn-sm btn-danger">{{ __('Delete') }}</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Parent Page') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Level') }}</th>
                                <th>{{ __('Featured') }}</th>
                                <th>{{ __('Page Url') }}</th>
                                <th>{{ __('Header Image') }}</th>
                                {{-- <th>{{ __('Slug') }}</th> --}}
                                <th>{{ __('Updated At') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="float-sm-right">
                            {{ $pages->appends(request()->input())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('modal')

@endsection
@section('scripts')
    <script src="{{ asset('backend/plugins/switchery/js/switchery.min.js') }}"></script>
    <script>
        // Multiple swithces
        var elem = Array.prototype.slice.call(document.querySelectorAll('.js-small'));

        elem.forEach(function(html) {
            var switchery = new Switchery(html, {
                color: '#1abc9c',
                jackColor: '#fff',
                size: 'small'
            });
        });
        function featuredUnfeatured(el,id) {
            var status = 0;
            if (el.checked) {
                status = 1;
            }
             $.post("{{ route('admin.pages.featured-unfeatured') }}", {_token:"{{ csrf_token() }}", id:id,status:status}, function(data){
                if(data == 1){
                    console.log('Active Successfully');
                }
                else{
                   console.log('Inactive Successfully');
                }
            });
        }
        function copyToClipboard(text,id) {
            if (window.clipboardData && window.clipboardData.setData) {
                // IE specific code path to prevent textarea being shown while dialog is visible.
                return window.clipboardData.setData("Text", text);
            } else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
                var textarea = document.createElement("textarea");
                textarea.textContent = text;
                textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in MS Edge.
                document.body.appendChild(textarea);
                textarea.select();
                try {
                    return document.execCommand("copy");  // Security exception may be thrown by some browsers.
                } catch (ex) {
                    console.warn("Copy to clipboard failed.", ex);
                    return false;
                } finally {
                    document.body.removeChild(textarea);
                }
            }
            $('#copyed-text-'+id).html('text copied to clipboard');
        }
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/switchery/css/switchery.min.css') }}">
@endsection
