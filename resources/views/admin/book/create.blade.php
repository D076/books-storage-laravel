@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление книги</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-75">
                                <input type="text" class="form-control" name="title" placeholder="Название книги" required value="{{ old('title') }}">
                            </div>
                            <div class="form-group w-75">
                                <label>Выберите автора</label>
                                <select name="user_id" class="form-control">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}"
                                        {{ $user->id == old('user->id') ? ' selected' : ''}}
                                        >{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group w-75">
                                <label>Жанры</label>
                                <select class="select2" multiple="multiple"
                                        style="width: 100%;"
                                        name="genre_ids[]" id="genres">
                                    @foreach($genres as $genre)
                                        <option
                                            {{ is_array(old('genres_id')) && in_array($genre->id, old('genres_ids')) ? ' selected' : '' }}
                                            value="{{ $genre->id }}">{{ $genre->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
