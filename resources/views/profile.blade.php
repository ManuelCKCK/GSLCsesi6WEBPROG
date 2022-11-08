@section('document_title', 'home')

@section('body')

    <div class="d-flex flex-wrap justify-content-center">
        @foreach($users as $user)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-header">
                {{$user->Username}}
                </div>
                    <div class="card-body">
                    <h5 class="card-title">{{$user->Username}}</h5>
                    <p class="card-text text-success">{{$user->Email}}</p>
                    <p class="card-text">{{$user->Gender}}</p>
                    <p class="card-text">{{$user->Age}}</p>
                    </div>
            </div>
        @endforeach


    </div>

@endsection