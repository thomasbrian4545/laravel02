@include('layout.header', ['title' => 'Gallery'])
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="{{ asset('/img/img-01.jpg') }}" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="/img/img-02.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="/img/img-03.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/JdzHrfX4l4Q/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/T-tVt4xsCdE/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/F8t2VGnI47I/350x250" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@include('layout.footer')
