@extends('employee.layout.app')

@section('title')
    <title>Employee | Dashboard</title>
@endsection

@section('body')
    <div class="container-fluid">

        <h1 class="dashboard_name_heading">Welcome, <span>{{ $employee_name }}</span></h1>

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Attendance</h4>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                        <th scope="col">Task</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if ($attendance_info_array_size == 0)
                                        <tr>
                                            <td colspan="4" class="text-center">No Records Found</td>
                                        </tr>
                                    @else
                                        @foreach ($attendance_info as $each_attendence_info)
                                            <tr>
                                                <td>{{ $each_attendence_info->attendace_date }}</td>
                                                <td>{{ $each_attendence_info->start_time }}</td>
                                                <td>{{$each_attendence_info->end_time}}</td>
                                                <td>{{$each_attendence_info->reason}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Leave Status</h4>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover mb-0 table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Number of Days</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($all_leave_info_array_size == 0)
                                        <tr>
                                            <td colspan="7" class="text-center">No Records Found</td>
                                        </tr>
                                    @else
                                        @foreach ($all_leave_info as $each_all_leave_info)
                                            <tr>
                                                @if ($each_all_leave_info->leave_type == 0)
                                                    <td>Sick</td>
                                                @elseif ($each_all_leave_info->leave_type == 1)
                                                    <td>Public</td>
                                                @elseif ($each_all_leave_info->leave_type == 2)
                                                    <td>Casual</td>
                                                @elseif ($each_all_leave_info->leave_type == 3)
                                                    <td>Special</td>
                                                @elseif ($each_all_leave_info->leave_type == 4)
                                                    <td>Earned</td>
                                                @endif
                                                <td>{{ $each_all_leave_info->start_date }}</td>
                                                <td>{{ $each_all_leave_info->end_date }}</td>
                                                <td>{{ $each_all_leave_info->number_of_days }}</td>
                                                <td>{{ $each_all_leave_info->leave_reason }}</td>
                                                @if ($each_all_leave_info->status == 0 )
                                            <td><h5><span class="badge bg-warning">Pending</span></h5></td>
                                        @elseif ($each_all_leave_info->status == 1 )
                                            <td><h5><span class="badge bg-success">Approved</span></h5></td>
                                        @else
                                            <td><h5><span class="badge bg-danger">Cancelled</span></h5></td>
                                        @endif
                                                <td>{{ $each_all_leave_info->comment }}</td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
