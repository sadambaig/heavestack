@extends('partials.default')
@section('content')
<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

 <div class="page-header">
                    <div class="page-title">
                        <h3>Careers</h3>
                    </div>
                    
                </div>

                <div class="row layout-top-spacing">



                   
                        {{-- 2nd coloum --}}
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <a href="{{ route('job.create') }}" title="" class="btn btn-primary">Create New Job</a>
                            <form action="" method="post">
                                          
                           <div class="table-responsive mb-4 mt-4">
                                
                                
                                  <table id="html5-extension" class="table table-hover dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="html5-extension_info">
                                    <thead>
                                        <tr role="row">
                                            <th><input type="checkbox" name="row" ></th>
                                            <th>image</th>
                                            <th>Title</th>
                                           
                                            <th>Salary</th>
                                            <th>Last Date</th>
                                            <th>Job Type</th>
                                            <th>Active</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                           
                                        @foreach($jobs as $job)
                                        <tr role="row">
                                            <td ><input type="checkbox" name="id" value="{{ $job->id }}"></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="usr-img-frame mr-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle" src="{{ asset('public/images/job_images/'.$job->icon) }}">
                                                    </div>
                                                </div>
                                                </td>
                                            <td>{{ $job->title }}</td>
                                            
                                            <td>{{ $job->salary }}</td>
                                            <td>{{ $job->last_date }}</td>
                                            <td>{{ $job->type }}</td>
                                            <td>
                                                <a href="{{ route('change.job.status',['id'=>$job->id]) }}" title="" class="badge {{ ($job->active=='active')?'badge-success':'badge-warning' }}">{{ $job->active }}</a>
                                                </td>
                                            <td>{{ $job->created_at }}</td>
                                            
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-dark btn-sm">Action</button>
                                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference6">
                                                        <a class="dropdown-item" href="#">View </a>
                                                      <a class="dropdown-item" href="{{ route('job.show',['id'=>$job->id]) }}">Edit</a>
                                                      <a class="dropdown-item delete-job" href="{{ route('job-delete',['id'=>$job->id]) }}">Delete </a>
                                                     
                                                      
                                                    </div>
                                                  </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table></div>
                                <button type="submit" class="btn btn-primary">Delete All</button>
                            </form></div></div>
                            </div>
                        </div>
                    </div>

                    

                </div>
                </div>
        </div>
        <!--  END CONTENT PART  -->
                
@endsection
@section('styles')

 <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/table/datatable/dt-global_style.css')}}">
    <link href="{{asset('public/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('scripts')
 <script src="{{ asset('public/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('public/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('public/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('public/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="{{asset('public/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{asset('public/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
    <script>
        $(function() {
            $('.delete-job').on('click',function(e){
                 e.preventDefault();
                 
                 var url=$(this).attr('href');
                 swal({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Delete',
                  padding: '2em'
                }).then(function(result) {
                  if (result.value) {
                    $.ajax({
                        url:url,
                        method:"GET",
                        success:function(response){
                          const toast = swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            padding: '2em'
                          });

                          toast({
                            type: 'success',
                            title: 'Deleted Successfully',
                            padding: '2em',
                          })
                            location.reload();  
                        }
                    });
                    
                  }
                })
                 
            })
        });
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
@endsection