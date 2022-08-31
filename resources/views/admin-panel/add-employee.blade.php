<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Registration</title>

    <!-- Bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="employee-reg">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-header h4 text-center">
                            Employee Registration
                        </div>
                        <div class="card-body">
                            <div class="reg-form">
                                
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <form method="post" action="{{ route('regemployee') }}" >
                                    @csrf
                                    <div class="mb-3">
                                        <label for="employeeName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="employeeName" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeeId" class="form-label">Employee ID</label>
                                        <input type="text" class="form-control" id="employeeId" name="emp_id">
                                    </div>
                                    <div class="mb-3">
                                      <label for="employeeEmail1" class="form-label">Email address</label>
                                      <input type="email" class="form-control" id="employeeEmail1" name="email">
                                    </div>
                                    <div class="mb-3">
                                      <label for="employeeDept" class="form-label">Department</label>
                                      <input type="text" class="form-control" id="employeeDept" name="dept">
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeePhone" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="employeePhone" name="phone">
                                      </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
