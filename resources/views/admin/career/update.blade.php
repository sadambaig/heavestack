@extends('partials.default')
@section('content')
<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

 <div class="page-header">
                    <div class="page-title">
                        <h3>Update Job</h3>
                    </div>
                    
                </div>

                <div class="row layout-top-spacing">



                   
                        {{-- 2nd coloum --}}
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                           <form action="{{ route('job.update') }}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $job->id }}">
                              <div class="form-group">
                                <label>Job Title</label>
                                 <input type="text" name=title value="{{ $job->title }}" placeholder="job Title"  class="form-control"> <span class="text-danger">{{ $errors->first('title') }}</span>
                              </div>
                              <div class="form-group">
                                <label>Salary</label>
                                 <input type="number" name=salary value="{{ $job->salary }}" placeholder="salary"  class="form-control"> <span class="text-danger">{{ $errors->first('salary') }}</span>
                              </div>
                              <div class="form-group">
                                  <label>Job icon</label>
                                  <input type="file"  name="icon" value="" class="form-control icon">
                                  <span class="icon-image"  >
                                      <img src="{{ asset('public/images/job_images/'.$job->icon) }}" alt="" class="show-image img img-responsive" style="height: 100px; width: 100px;">
                                  </span>
                                  <span class="text-danger">{{ $errors->first('icon') }}</span>

                              </div>
                              <div class="form-group">
                                <label>Job Type</label>
                                  <select name="type" class="form-control">
                                      <option value="Employee" @if($job->type=='Employee') selected @endif>Employee</option>
                                      <option value="Internee" @if($job->type=='Internee') selected @endif>Internee</option>
                                  </select>
                                  <span class="text-danger">{{ $errors->first('type') }}</span>
                              </div>
                              <div class="form-group">
                                <label>Tags</label>
                                  <select class="form-control tagging" multiple="multiple" name="tags[]" >
                                    <option>Web Development</option>
                                    <option>Web Designer</option>
                                    <option>Andriod </option>
                                </select>
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                              </div>
                              <div class="form-group">
                                  <label>Last Date</label>
                                  <input id="basicFlatpickr" value="{{ old('last_date') }}" value="{{ $job->last_date }}" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.." readonly="readonly" name="last_date">
                                  <span class="text-danger">{{ $errors->first('last_date') }}</span>
                              </div>
                              <div class="form-group">
                                  <label>Short Description</label>
                                  <textarea name="s_desc" class="form-control">{{ $job->s_desc }}</textarea>
                                  <span class="text-danger">{{ $errors->first('s_desc') }}</span>
                              </div>
                              <div class="form-group">
                                <label>Job Description</label>
                                <textarea name="desc" class="form-control">{{ $job->desc }}</textarea>
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
                              </div>
                              
                              <div class="form-group">

                                  <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">

                                        <input type="checkbox" name="active" @if($job->active=='active') checked @endif>
                                        <span class="slider"></span>
                                    </label>
                                    
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                           </form>
                        </div>
                    </div>

                    

                </div>
                </div>
        </div>
        <!--  END CONTENT PART  -->
                
@endsection
@section('styles')

 <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/forms/switches.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/flatpickr/flatpickr.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/flatpickr/custom-flatpickr.css')}}">
 <link rel="stylesheet" type="text/css" href="{{ asset('public/plugins/select2/select2.min.css')}}">

    
@endsection
@section('scripts')
  <script src="{{ asset('public/plugins/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('public/plugins/flatpickr/custom-flatpickr.js') }}"></script>
  <script src="{{ asset('public/plugins/select2/select2.min.js') }}"></script>
<script>


    var f1 = flatpickr(document.getElementById('basicFlatpickr'));
    $(".tagging").select2({
    tags: true
});
    new SimpleMDE({
    element: document.getElementById("demo1"),
    spellChecker: false,
});

</script>
<script>
     $(function() {
       
        $('.icon').on('change',function(){
            var input=this;

            if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               
                $('.show-image').attr('src','');
                $('.icon-image').slideToggle('slow');
                $('.show-image').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
            
        });
    });
</script>

@endsection