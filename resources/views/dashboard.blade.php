@extends('template')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0" style="font-family: cursive;"><b>Dashboard</b></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{Route('dash')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">UTS_PWLP</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>
    <section class="content">
    <div class="card">
        <div class="card-header border-0">
            <div class="card-body">
            Selamat Datang, 
            </div>
        </div>
    </div>
    </section>
    
@endsection

<script>
    alert('Selamat Datang, Enjoy!');
</script>
