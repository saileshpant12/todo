@extends('template')

@section('content')
<div class="row d-flex justify-content-center container">
  <div class="col-md-8">
    <div class="card-hover-shadow-2x mb-3 card">
      <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Available Task Lists</div>
      </div>
      <div class="scroll-area-sm">
        <perfect-scrollbar class="ps-show-limits">
          <div style="position: static;" class="ps ps--active-y">
            <div class="ps-content">
              <ul class=" list-group list-group-flush">
                <li class="list-group-item">
                  <div class="todo-indicator bg-warning"></div>
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left">
                        <div class="widget-heading">My First Todo List <div class="badge badge-danger ml-2">Not Completed</div>
                      </div>
                      <div class="widget-subheading"><i>Due Date : 2020-02-10</i></div>
                    </div>
                    <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#completeModal"> <i class="fa fa-check"></i></button> <a role="button" href="edit" class="border-0 btn-transition btn btn-outline-primary"> <i class="fa fa-edit"></i></a> <button class="border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fa fa-trash"></i> </button> </div>
                  </div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="todo-indicator bg-warning"></div>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">My First Todo List <div class="badge badge-success ml-2">Completed</div>
                    </div>
                    <div class="widget-subheading"><i>Due Date : 2020-02-10</i></div>
                  </div>
                  <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#completeModal"> <i class="fa fa-check"></i></button> <a role="button" href="edit" class="border-0 btn-transition btn btn-outline-primary"> <i class="fa fa-edit"></i></a> <button class="border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fa fa-trash"></i> </button> </div>
                </div>
              </div>
            </li>

            <li class="list-group-item">
              <div class="todo-indicator bg-warning"></div>
              <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                  <div class="widget-content-left">
                    <div class="widget-heading">My First Todo List <div class="badge badge-danger ml-2">Not Completed</div>
                  </div>
                  <div class="widget-subheading"><i>Due Date : 2020-02-10</i></div>
                </div>
                <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#completeModal"> <i class="fa fa-check"></i></button> <a role="button" href="edit" class="border-0 btn-transition btn btn-outline-primary"> <i class="fa fa-edit"></i></a> <button class="border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fa fa-trash"></i> </button> </div>
              </div>
            </div>
          </li>

          <li class="list-group-item">
            <div class="todo-indicator bg-warning"></div>
            <div class="widget-content p-0">
              <div class="widget-content-wrapper">
                <div class="widget-content-left">
                  <div class="widget-heading">My First Todo List <div class="badge badge-warning ml-2">Due Soon</div>
                </div>
                <div class="widget-subheading"><i>Due Date : 2020-02-10</i></div>
              </div>
              <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#completeModal"> <i class="fa fa-check"></i></button> <a role="button" href="edit" class="border-0 btn-transition btn btn-outline-primary"> <i class="fa fa-edit"></i></a> <button class="border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fa fa-trash"></i> </button> </div>
            </div>
          </div>
        </li>

        <li class="list-group-item">
          <div class="todo-indicator bg-warning"></div>
          <div class="widget-content p-0">
            <div class="widget-content-wrapper">
              <div class="widget-content-left">
                <div class="widget-heading">My First Todo List <div class="badge badge-danger ml-2">Not Completed</div>
              </div>
              <div class="widget-subheading"><i>Due Date : 2020-02-10</i></div>
            </div>
            <div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal" data-target="#completeModal"> <i class="fa fa-check"></i></button> <a role="button" href="edit" class="border-0 btn-transition btn btn-outline-primary"> <i class="fa fa-edit"></i></a> <button class="border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fa fa-trash"></i> </button> </div>
          </div>
        </div>
      </li>

    </ul>
  </div>
</div>
</perfect-scrollbar>
</div>
<div class="d-block text-right card-footer"><a role="button" href="create" class="btn btn-primary">Add New Task</a></div>
</div>
</div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;
          </span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure to delete ?
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
      <button type="button" class="btn btn-primary">Yes</button>
    </div>
  </div>
</div>
</div>

<!-- COMPLETE MODAL -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to mark as completed ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

@endsection