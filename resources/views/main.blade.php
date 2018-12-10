<div class="tab-pane fade show active" id="main" role="tabpanel">
    <div class="card border-dark">
      <div class="card-body">
          <form action="{{ route('index') }}" method="post">
              @csrf
              @include('partials.form')
          </form>
      </div>
    </div>
</div>
