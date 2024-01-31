<x-app-layout title="Form Validation">
    <div class="form mt-5">
        <form action="{{ route('forms.store') }}" method="POST">
            <h5>Form</h5>
            @csrf
            <hr class="mb-4">
            <div class="mb-3">
                <label for="course" class="control-label">Course</label>
                <input type="text" name="course" id="course" class="form-control" value="{{ old('course') }}">
            </div>
            <div class="mb-3">
                <label for="workload" class="control-label">Workload</label>
                <input type="text" name="workload" id="workload" class="form-control" value="{{ old('workload') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-app-layout>
