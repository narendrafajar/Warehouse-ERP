<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <center>
                    <div class="brand-logo">
                        <img src="{{asset('warehouse/images/whiteBgColor.png')}}" alt="logo" style="width: 100%">
                    </div>
                </center>
                {{-- <h2 class="text-center">SIG </h2>
                <h4 class="text-center"><i>{{__('Sistem Informasi Pergudangan')}}</i></h4> --}}
                <h6 class="font-weight-light text-center">{{__('Sign in to work.')}}</h6>
                <form class="pt-3"  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="current-password">
                    </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
