@extends('admin.layout.default')
@section('pageTitle', 'Add Property') 
@section('content')
<style type="text/css">
.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 38px;
    user-select: none;
    -webkit-user-select: none;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 36px;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mt-0 mb-3 header-title">Add floorplans</h4>
                    </div>
                </div>
                <form class="mt-3" action="{{ url('admin/floorplans/add') }}" id="form">
                    @csrf  
                    <div class="row">

                      


                      <div class="col-md-12">
                            <div class="form-group">
                                <label for="status"> Category </label>
                                {{   Form::select('category',$category,null,['class'=>'form-control select2','required']) }}
                            </div>
                        </div>


                      <div class="col-md-12">
                            <div class="form-group">
                                <label for="status"> Property </label>
                                {{   Form::select('properties',$property,null,['class'=>'form-control select2','required']) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Main Image </label>
                                <input class="form-control" type="file" name="main_image" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email"> Title </label>
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                         <div class="row" style="align-items: center;">
                          <div class="col-md-10 dynamic-field" id="dynamic-field-1">
                            <div class="row" >
                               <div class="col-md-6">
                                <div class="form-group">
                                  <label for="field" class="hidden-md">Image*</label>
                                  <input type="file" id="image" class="form-control" name="image[]" style="padding-top: 4px;" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="field" class="hidden-md">Name*</label>
                                  <input type="text" id="field" class="form-control" name="name[]" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 mt-25 append-buttons">
                            <div class="clearfix" style="margin-top: 10px;">
                              <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fa fa-plus fa-fw"></i>
                              </button>
                              <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fa fa-minus fa-fw"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">  
                            <button type="submit" class="btn btn-primary">Submit <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
                            <a href="{{ url('admin/floorplans') }}" class="btn btn-primary my-4">Back</a>
                        </div>
                    </div>
                </form>          
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
   $(document).ready(function() {
       $('.basic-multiple').select2();
   });
   $(document).ready(function() {
    $('.select2').select2();

});
</script>
<script type="text/javascript">



$(document).ready(function() {
  var buttonAdd = $("#add-button");
  var buttonRemove = $("#remove-button");
  var className = ".dynamic-field";
  var count = 0;
  var field = "";
  var maxFields =50;

  function totalFields() {
    return $(className).length;
  }

  function addNewField() {
    count = totalFields() + 1;
    field = $("#dynamic-field-1").clone();
    field.attr("id", "dynamic-field-" + count);
    field.children("label").text("Field " + count);
    field.find("input").val("");
    $(className + ":last").after($(field));
  }

  function removeLastField() {
    if (totalFields() > 1) {
      $(className + ":last").remove();
    }
  }

  function enableButtonRemove() {
    if (totalFields() === 2) {
      buttonRemove.removeAttr("disabled");
      buttonRemove.addClass("shadow-sm");
    }
  }

  function disableButtonRemove() {
    if (totalFields() === 1) {
      buttonRemove.attr("disabled", "disabled");
      buttonRemove.removeClass("shadow-sm");
    }
  }

  function disableButtonAdd() {
    if (totalFields() === maxFields) {
      buttonAdd.attr("disabled", "disabled");
      buttonAdd.removeClass("shadow-sm");
    }
  }

  function enableButtonAdd() {
    if (totalFields() === (maxFields - 1)) {
      buttonAdd.removeAttr("disabled");
      buttonAdd.addClass("shadow-sm");
    }
  }

  buttonAdd.click(function() {
    addNewField();
    enableButtonRemove();
    disableButtonAdd();
  });

  buttonRemove.click(function() {
    removeLastField();
    disableButtonRemove();
    enableButtonAdd();
  });
});
</script>
@endsection