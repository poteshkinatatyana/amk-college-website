@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')

<style>
	.container-fluid{
opacity: 0.5;
}
</style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            {{-- <img src="http://pa1.narvii.com/7072/ffabc13a9b1ee6c7aa6e695b7470f620abfbab0fr1-320-183_00.gif" width="65px" height="30px" data-widget="pushmenu"  > --}}
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-white" data-widget="pushmenu">Главная</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row" >
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $posts_count }}</h3>

                            <p>Страницы на русском</p>
                        </div>
                       
                        <a href="{{ route('post.index') }}" class="small-box-footer">Перейти<i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>{{ $posts_kz_count }}</h3>

                            <p>Страницы на казахском</p>
                        </div>
                       
                        <a href="{{ route('postkz.index') }}" class="small-box-footer">Перейти <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                  <!-- ./col -->
             <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>{{ $posts_en_count }}</h3>

                        <p>Страницы на английском</p>
                    </div>
                    
                    <a href="{{ route('posten.index') }}" class="small-box-footer">Перейти <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            </div>
           

        </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
