<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div id="add" class="col-12 col-md-6 order-md-1 order-last">
                <h3>Danh Mục</h3>
                <p class="text-subtitle text-muted"><a href="{{ route('category.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> Thêm danh mục mới</p>
            </div>
        </div>
    </x-slot>

    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Danh sách danh mục</h4>
            </div>
            <div class="card-body">
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <form action="#" method="POST" >
                            {{ @csrf_field() }}
                        <select name="hint" class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Tên từ A-Z</option>
                            <option value="1">Mới nhất</option>
                        </select>
                        <button type="submit" class="btn btn-sm btn-default">Sắp xếp theo</button>
                        </form>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input name="selectAll" id="selectAll" type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>STT</th>
                                <th>Tên Danh Mục</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cat as $key=>$item)
                            <tr>
                                <td><label class="i-checks m-b-none"><input class="checkbox" type="checkbox" name="cat_id[]"><i></i></label></td>
                                <td>{{ $key+=1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->desc }}</td>
                                <td>
                                    @if ($item->status == 0)
                                    <span style="font-size: 25px; color: red" class="fa fa-frown-o"></span></td>
                                    @else
                                    <span style="font-size: 25px; color: blue" class="fa fa-smile-o"></span></td>
                                    @endif
                                <td>
                                    <a href="#"><i class="fa fa-pencil-square-o text-success"></i></a>
                                    <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 0 trên tổng số 100 danh mục</small>
                        </div>
                        <div class="col-sm-5 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                {{ $cat->links() }}
                            </ul>
                        </div>
                        <div class="col-sm-4 text-center">
                            <a ><span style="font-size: 20px; color: red; padding-right: 20px" class="fa fa-frown-o"> Ẩn</span></a>
                            <a href="#"><span style="font-size: 20px; color: blue" class="fa fa-smile-o"> Hiển thị</span></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
</x-app-layout>
