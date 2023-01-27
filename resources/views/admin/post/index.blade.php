@extends('admin.layout.master')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endpush
@section('content')
<main style="margin-left: 215px" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-light text-dark ">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-success ">
        <h1 style="color: #114537" class="h2 fw-bold">Tambah Item</h1>
        <div class="btn-toolbar mb-2 mb-md-0 ">
          
            <button onclick="addPost()" type="button" class="btn btn-sm btn-outline-success">Add New</button>
          </div>
        </div>

        <div class="table table-striped table-responsive shadow ">
          <table id="postTable" class="table table-striped table-bordered  table-responsive " style="width: 100%">
            <thead class="text-light" style="background-color: #000000;" align="middle">
              <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Merk</th>
                <th>Spesifikasi</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
           
          </table>
      </div>
@include('admin.post.detail')
@include('admin.post.create')
</main>
    @endsection
    @push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.25/dataRender/ellipsis.js"></script>
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script type="text/javascript">

      Swal.fire(
          'Welcome to Garage Massage!',
          'success'
       )

      loadData();

      function loadData(){
        $.ajax({
          'url': "{{ url('admin/api.post') }}",
          'method': "GET",
          'contentType': 'application/json'
        }).done( function(data) {
          $('#postTable').dataTable({
            columnDefs:[{
              targets:[3],
              render:$.fn.dataTable.render.ellipsis(20)
            }],
            destroy: true,
            "aaData":data,
            "columns": [
              { "data": "id" },
              { "data": "name" },
              { "data": "title" },
              { "data": "description" },
              { "data": "image",
                        "render": function(data) {
                    return '<img src="/image_upload/'+data+ '"width="150" height="150"/>';
                        } },
              { "data": "created_at" },
              { "data": "updated_at" },
              { "data": "id",
                        "render":function(data) {
                          return '<div class="d-grid gap-2 d-md-flex justify-content-md-end">'+
                           '<a onclick="showPost('+data+')" class="btn btn-info btn-sm">'+'Detail'+'</a>'+
                          '<a onclick="editPost('+data+')" class="btn btn-success  btn-sm">'+'Edit'+'</a>'+
                          '<a onclick="deletePost('+data+')" class="btn btn-danger  btn-sm">'+'Delete'+'</a>'+'</div>'
                          ;
                        } }
              ]
         });
        })
      }





      function addPost(){
        save_method = 'addPostMethod';
        $('input[name=_method]').val('POST');
        $('#createModal').modal('show');
        $('#createModal form')[0].reset();
        $('.modal-title').text('Add Post');
        CKEDITOR.instances.de.setData('');
        $("#img").attr('required', '');
      }

      function createPost(){
       var id = $('#id').val();
        if (save_method == 'addPostMethod') url = "{{ url('admin/post') }}";
        else url = "{{ url('admin/post') . '/'}}" + id;

        for (instance in CKEDITOR.instances ){
          CKEDITOR.instances[instance].updateElement();
        }

        $.ajax({
          url: url,
          type: "POST",
          data: new FormData($("#createModal form")[0]),
          contentType:false,
          processData:false,
          success:function(data){
          Swal.fire(
          'Success!',
          data.message,
          'success'
          );
          $('#createModal').modal('hide');
          loadData();
          },
          error : function(){
            alert("Post Failed");
          }
        }
        )
      }

      function showPost(id){
        $('#detailModal').modal('show');
        $('.modal-title').text('Post Detail');
        $.ajax({
          url: "{{ url('admin/post') }}"+'/'+id,
          type: "GET",
          dataType: "JSON",
          success: function(data){
            $('#i').text(data.id);
            $('#c').text(data.name);
            $('#t').text(data.title);
            $('#d').text(data.description);
            $('#im').attr('src','/image_upload/'+data.image);
            $('#ca').text(data.created_at);
            $('#ua').text(data.updated_at);
          },
          error : function(){
            alert("Nothing Data");
          }
        })
      }

      function editPost(id){
        save_method = 'editPostMethod';
    $('input[name=_method]').val('PATCH');
    $('#createModal').modal('show');
    $('#createModal form')[0].reset();
    $('.modal-title').text('Update User');
    $("#img").removeAttr('required');
    $.ajax({
      url: "{{ url('admin/post') }}" +'/'+ id + "/edit",
      type:"GET",
      dataType: "JSON",
      success:function(data) {
        console.log(data.description);
        $('#id').val(data.id);
        $('#cat').val(data.category_id);
        $('#ti').val(data.title);
        CKEDITOR.instances.de.setData(data.description);
      },
      error : function() {
        alert("Nothing Data");
      }


    });
}
function deletePost(id){

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result)=>{
    if (result.isConfirmed){
    var csrf_token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url : "{{ url('admin/post') }}" + '/' + id,
      type: "POST",
      data: {'_method' : 'DELETE', '_token' : csrf_token},
      success : function(data){
        Swal.fire(
          'Deleted!',
          data.message,
          'success'
          )
        loadData();
        },
        error : function(){
          alert("Nothing Data");
        }
      });
}
})
}


(function(){
    'use strict';
    window.addEventListener('load',function(){
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms,function(form){
        form.addEventListener('submit',function(event){
          if (form.checkValidity() === false) {
            event.preventDevault();
            event.stopPropagation();
          } 
          form.classList.add('was-validated');
          if (form.checkValidity() === true) {
            createPost();
            event.preventDevault();
          }
        }, false);
      });     
    }, false);
  })();
    
    </script>
    @endpush
