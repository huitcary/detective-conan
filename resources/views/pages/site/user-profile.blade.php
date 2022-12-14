@extends('components.base')


@section('content')

  <div class="container mt-4">
    <div class="d-flex justify-content-between">
      <div>
        <h1>
          {{ Auth::user()->name }}
        </h1>
      </div>

      <div class="d-flex justify-content-between">
        <div class="user-details justify-content-end">
          @php
            $casesFiled = App\Models\Casefile::where('user_id', auth()->user()->id)->count();
            $casesSolved = App\Models\Casefile::where('user_id', auth()->user()->id)->where('status', 'solved')->count();
          @endphp
          <h6>Uncleaned: {{ $casesFiled }}</h6>
          <h6>Cleaned: {{ $casesSolved }}</h6>
        </div>
        <div class="btn">
          <a href="{{ route('file-a-case') }}" class="btn bg-success text-white">Add New Cleaning</a>
        </div>
      </div>

    </div>
    <hr>

    <livewire:casefile.index/>
  </div>

@endsection