@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>
            <div class="panel-body">
                <?php 
                    $message = Session::get('message');
                    if($message){
                        echo $message;
                        Session::put('message',null);
                    }
                ?>
                @foreach($edit_category_product as $rows)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$rows->category_id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" value="{{$rows->category_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none;" rows="8" name="category_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$rows->category_desc}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0" <?php if($rows->category_status==0) echo "selected"; ?> >Ẩn</option>
                                <option value="1" <?php if($rows->category_status==1) echo "selected"; ?> >Hiển thị</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="edit_category_product" class="btn btn-info">Sửa danh mục</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
    
</div>
@endsection