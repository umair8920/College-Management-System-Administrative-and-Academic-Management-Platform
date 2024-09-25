@include('layouts.header')

@include('layouts.navigation')            

<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    @include('layouts.side-bar')


                    <div id="layoutSidenav_content">
                        <main>
  <!----------------- Table to display teachers ------------------>
                            <div class="card mb-4">
                                <div clas="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    TEACHERS TABLE
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Description</th>
                                                <th>Education</th>
                                                <th>Experiences</th>
                                                <th>Expertise</th>
                                                <th>Language</th>
                                                <th>Position</th>
                                                <th>Phone</th>
                                                <th>Mail</th>
                                                <th>Exp_Years</th>
                                                <th>Actions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Description</th>
                                                <th>Education</th>
                                                <th>Experiences</th>
                                                <th>Expertise</th>
                                                <th>Language</th>
                                                <th>Position</th>
                                                <th>Phone</th>
                                                <th>Mail</th>
                                                <th>Exp_Years</th>
                                                <th>Actions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($teachers as $teacher)
                                                <tr>
                                                    <td>{{ $teacher->id }}</td>
                                                    <td>{{ $teacher->Name }}</td>
                                                    <td>{{ $teacher->Role }}</td>
                                                    <td>{{ $teacher->Description }}</td>
                                                    <td>{{ $teacher->Education }}</td>
                                                    <td>{{ $teacher->Experiences }}</td>
                                                    <td>{{ $teacher->language }}</td>
                                                    <td>{{ $teacher->position }}</td>
                                                    <td>{{ $teacher->phone }}</td>
                                                    <td>{{ $teacher->mail }}</td>
                                                    <td>{{ $teacher->exp_years }}</td>
                                                    <td>
                                                            <!-- Edit button -->
                                                        <a href="{{ url('edit-teachers', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>
                                                            <!-- Delete button -->
                                                        <form action="{{ url('delete-teacher', $teacher->id) }}" method="GET" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </main>


  <!-------------------- Table to display teachers Ends Here ----------------------->

                        
                        
                        
  <!-------------------- Table to display courses ----------------------------------->


 <!----                           <div class="card mb-4">
                                <div clas="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    COURSES TABLE
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Actions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Course Content</th>
                                                <th>Actions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($courses as $course)
                                                <tr>
                                                    <td>{{ $course->id }}</td>
                                                    <td>{{ $course->Name }}</td>
                                                    <td>{{ $course->Description }}</td>
                                                    <td>{{ $course->C1 }}</td>
                                                    <td>{{ $course->C2 }}</td>
                                                    <td>{{ $course->C3 }}</td>
                                                    <td>{{ $course->C4 }}</td>
                                                    <td>{{ $course->C5 }}</td>
                                                    <td>{{ $course->C6 }}</td>
                                                    <td>---->
                                                        <!-- Edit button -->
                                                    <!--    <a href="{{ url('edit-courses', $course->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>-->
                                                         <!-- Delete button -->
                                                     <!--   <form action="{{ url('delete-course', $course->id) }}" method="GET" class="d-inline">
                                                             @csrf
                                                             @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </main>-->
    
  <!-------------------- Table to display courses ENDS HERE ----------------------------------->                        
                        

@include('layouts.footer')                        
