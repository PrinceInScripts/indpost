<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Employee Registration Form</h2>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Father's Name</label>
                                    <input type="text" name="father_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mother's Name</label>
                                    <input type="text" name="mother_name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Employee ID</label>
                                    <input type="text" name="employee_id" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Post</label>
                                    <input type="text" name="post" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Salary</label>
                                    <input type="number" name="salary" class="form-control" step="0.01" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Joining Date</label>
                                    <input type="date" name="joining_date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Posting</label>
                                    <input type="text" name="posting" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">S/O</label>
                                    <input type="text" name="s_o" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Job Status</label>
                                    <input type="text" name="job_status" class="form-control" required>
                                </div>
                            </div>

                             <!-- Aadhaar Number -->
                             <div class="mb-3">
                                <label class="form-label">Aadhaar Number</label>
                                <input type="text" name="aadhaar_number" class="form-control" required>
                            </div>

                            <!-- Account Number -->
                            <div class="mb-3">
                                <label class="form-label">Account Number</label>
                                <input type="text" name="account_number" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Signature</label>
                                <input type="file" name="signature" class="form-control">
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" name="eligible" value="1" class="form-check-input" checked>
                                <label class="form-check-label">Eligible</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
