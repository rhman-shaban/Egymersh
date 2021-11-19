@extends('site.layouts.master')

@section('page_content')
<main class="main">
    {{-- <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">Home</a>
                <span></span> Login 
            </div>
        </div>
    </div> --}}
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">

                @include('dashboard.layouts.messages')
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div style="border-right: 2px solid #088178;" class="col-6 m-auto">
                            <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                <div class="padding_eight_all bg-white">
                                    <div class="heading_s1">
                                        <h3 class="mb-30">Login to your account</h3>
                                    </div>
                                    <form method="post"  action="{{ route('user.login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="" name="email" placeholder="Email or Phone">
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input required="" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                            @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                   <button type="submit" class="btn btn-fill-out btn-block hover-up">Login</button>
                                               </div>
                                             
                                           </div>
                                       </div>
                                   </form>                                   
                               </div>
                           </div>
                       </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</section>
</main>
@endsection