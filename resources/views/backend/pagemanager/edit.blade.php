@extends('backend.layouts.app')

@section('meta_title', __('Edit Menu Item'))
@section('page_name', __('Edit Menu Item'))
@section('page_description', __('Edit an existing menu item'))

@section('name')
<li class="breadcrumb-item">
    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a href="#!">{{ __('Edit Menu Item') }}</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('page_name')</h5>
            </div>
            <div class="card-block">
                <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- This is important for updating the record -->

                    <!-- Filename -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Filename') }}</label>
                        <div class="col-sm-6">
                            <input type="text" name="filename" value="{{ old('filename', $menu->filename) }}" class="form-control @error('filename') form-control-danger @enderror">
                            @error('filename')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Link Name -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Link Name') }}</label>
                        <div class="col-sm-6">
                            <input type="text" name="link_name" value="{{ old('link_name', $menu->link_name) }}" class="form-control @error('link_name') form-control-danger @enderror">
                            @error('link_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Page Title -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Page Title') }}</label>
                        <div class="col-sm-6">
                            <input type="text" name="page_title" value="{{ old('page_title', $menu->page_title) }}" class="form-control @error('page_title') form-control-danger @enderror">
                            @error('page_title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Keyword -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Keyword') }}</label>
                        <div class="col-sm-6">
                            <input type="text" name="keyword" value="{{ old('keyword', $menu->keyword) }}" class="form-control @error('keyword') form-control-danger @enderror">
                            @error('keyword')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                        <div class="col-sm-6">
                            <textarea name="description" class="form-control @error('description') form-control-danger @enderror">{{ old('description', $menu->description) }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Heading -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Heading') }}</label>
                        <div class="col-sm-6">
                            <input type="text" name="heading" value="{{ old('heading', $menu->heading) }}" class="form-control @error('heading') form-control-danger @enderror">
                            @error('heading')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Serial No. -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Serial No.') }}</label>
                        <div class="col-sm-6">
                            <input type="number" name="serial_no" value="{{ old('serial_no', $menu->serial_no) }}" class="form-control @error('serial_no') form-control-danger @enderror">
                            @error('serial_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Top Menu -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Top Menu') }}</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="top_menu" value="1" {{ old('top_menu', $menu->top_menu) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <!-- Top Serial No. -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Top Serial No.') }}</label>
                        <div class="col-sm-6">
                            <input type="number" name="top_serial_no" value="{{ old('top_serial_no', $menu->top_serial_no) }}" class="form-control @error('top_serial_no') form-control-danger @enderror">
                            @error('top_serial_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Bottom Menu -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Bottom Menu') }}</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="bottom_menu" value="1" {{ old('bottom_menu', $menu->bottom_menu) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <!-- Bottom Serial No. -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Bottom Serial No.') }}</label>
                        <div class="col-sm-6">
                            <input type="number" name="bottom_serial_no" value="{{ old('bottom_serial_no', $menu->bottom_serial_no) }}" class="form-control @error('bottom_serial_no') form-control-danger @enderror">
                            @error('bottom_serial_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Bottom Position -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Bottom Position') }}</label>
                        <div class="col-sm-6">
                            <select name="bottom_position" class="form-control @error('bottom_position') form-control-danger @enderror">
                                <option value="None" {{ old('bottom_position', $menu->bottom_position) == 'None' ? 'selected' : '' }}>{{ __('None') }}</option>
                                <option value="Left" {{ old('bottom_position', $menu->bottom_position) == 'Left' ? 'selected' : '' }}>{{ __('Left') }}</option>
                                <option value="Right" {{ old('bottom_position', $menu->bottom_position) == 'Right' ? 'selected' : '' }}>{{ __('Right') }}</option>
                            </select>
                            @error('bottom_position')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Left Menu -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Left Menu') }}</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="left_menu" value="1" {{ old('left_menu', $menu->left_menu) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <!-- Left Position -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Left Position') }}</label>
                        <div class="col-sm-6">
                            <select name="left_position" class="form-control @error('left_position') form-control-danger @enderror">
                                <option value="None" {{ old('left_position', $menu->left_position) == 'None' ? 'selected' : '' }}>{{ __('None') }}</option>
                                <option value="Top" {{ old('left_position', $menu->left_position) == 'Top' ? 'selected' : '' }}>{{ __('Top') }}</option>
                                <option value="Bottom" {{ old('left_position', $menu->left_position) == 'Bottom' ? 'selected' : '' }}>{{ __('Bottom') }}</option>
                            </select>
                            @error('left_position')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Left Serial No. -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Left Serial No.') }}</label>
                        <div class="col-sm-6">
                            <input type="number" name="left_serial_no" value="{{ old('left_serial_no', $menu->left_serial_no) }}" class="form-control @error('left_serial_no') form-control-danger @enderror">
                            @error('left_serial_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Menu -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Right Menu') }}</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="right_menu" value="1" {{ old('right_menu', $menu->right_menu) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <!-- Right Position -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Right Position') }}</label>
                        <div class="col-sm-6">
                            <select name="right_position" class="form-control @error('right_position') form-control-danger @enderror">
                                <option value="None" {{ old('right_position', $menu->right_position) == 'None' ? 'selected' : '' }}>{{ __('None') }}</option>
                                <option value="Top" {{ old('right_position', $menu->right_position) == 'Top' ? 'selected' : '' }}>{{ __('Top') }}</option>
                                <option value="Bottom" {{ old('right_position', $menu->right_position) == 'Bottom' ? 'selected' : '' }}>{{ __('Bottom') }}</option>
                            </select>
                            @error('right_position')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Serial No. -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Right Serial No.') }}</label>
                        <div class="col-sm-6">
                            <input type="number" name="right_serial_no" value="{{ old('right_serial_no', $menu->right_serial_no) }}" class="form-control @error('right_serial_no') form-control-danger @enderror">
                            @error('right_serial_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{ __('Content') }}</label>
                        <div class="col-sm-10">
                            <textarea name="content" class="form-control @error('content') form-control-danger @enderror">{{ old('content', $menu->content) }}</textarea>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-2">
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
