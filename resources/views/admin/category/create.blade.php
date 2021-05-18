<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div id="add" class="col-12 col-md-6 order-md-1 order-last">
                <h3>Danh Mục</h3>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                @if (Session::has('message'))
                <h4 style="color: red !important" class="card-title"> {{ Session::get('message') }} </h4>
                @else
                <h4 class="card-title">Thêm danh mục</h4>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 text-center">
                    <form role="form" id="myForm" method="POST" action="{{ route('category.store') }}" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleCategory">Tên Danh Mục</label>
                            <input type="text" name="name" class="form-control" id="cat_name">
                            @if ($errors->has('name'))
                            
                            @endif
                        </div>
                       
                        <div class="form-group">
                            <label for="category_description">Mô Tả Danh Mục</label>
                            <textarea name="desc" id="editor" style="resize: none" rows="8" class="form-control" id="cat_desc"></textarea>
                            @if ($errors->has('desc'))
                            <span class="text-danger"> {{ $errors->first('desc') }} </span>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="category_status">Trạng Thái Danh Mục</label>
                            <select id="cat_status" name="status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button name="submit" type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </section>

   {{--  <script type="text/javascript">
        $(document).ready(function(){
           $("#myForm").on('submit', function(e){
               e.preventDefault();

               let name = $("#cat_name").val();
               let desc = $("#cat_desc").val();
               let status = $("#cat_status").val();

               $.ajax({
                  type: 'POST',
                  url: '/category/store',
                  data: {
                      "_token": "{{ csrf_token() }}",
                      name: name,
                      desc: desc,
                      status: status
                  }
                  success: function(res){
                      alert(res.message);
                  }
                  error: function(res){
                      console.log('Ajax failed!');
                  }
               });
               
           })
        });
    </script> --}}
</x-app-layout>
