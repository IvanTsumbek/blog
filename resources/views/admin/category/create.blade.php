@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавление категории</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.category.index')}}">Категории</a></li>
            <li class="breadcrumb-item active">Добавление категории</li>
          </ol>
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
          <form action="{{route('admin.category.store')}}" method="POST" class="w-25">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Название категории" name="title">
              @error('title')
              <div class="text-danger">Это поле необходимо для заполнения</div>
              @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="Добавить">
          </form>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection