@extends('layouts.template')
@section('content')
    <div class="container">
        <h1>Edit Employee</h1>
        <form method="POST" action="{{ route('employee.update', $employee) }}">
            @csrf
            @method('PUT')
            <div class="w-50">
                <div class="form-group">
                    <label for="fullname">Fullname:</label>
                    <input type="text" name="fullname" id="fullname"
                        class="form-control @error('fullname') is-invalid @enderror"
                        value="{{ old('fullname', $employee->fullname) }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $employee->email) }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone"
                        class="form-control @error('phone') is-invalid @enderror"
                        value="{{ old('phone', $employee->phone) }}">
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position"
                        class="form-control @error('position') is-invalid @enderror"
                        value="{{ old('position', $employee->position) }}" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age"
                        class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $employee->age) }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="number" step="0.01" name="salary" id="salary"
                        class="form-control @error('salary') is-invalid @enderror"
                        value="{{ old('salary', $employee->salary) }}" required>
                </div>
                <div class="form-group">
                    <label for="active">Active:</label>
                    <select name="active" id="active" class="form-control @error('active') is-invalid @enderror">
                        <option value="1" {{ old('active', $employee->active) == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('active', $employee->active) == '0' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hireDate">Hire Date:</label>
                    <input type="date" name="hireDate" id="hireDate"
                        class="form-control @error('hireDate') is-invalid @enderror"
                        value="{{ old('hireDate', $employee->hireDate) }}" required>
                </div>
            </div>
            <div class="form-group my-2">
                <a href="/employee" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-outline-success">Update</button>
            </div>
        </form>
    </div>
@endsection
