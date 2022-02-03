<form wire:submit.prevent="store" class="bg-white p-5 rounded m-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-2">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" wire:model="title" aria-describedby="emailHelp"
            placeholder="Enter Title">
    </div>
    <div class="form-group mb-2">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" wire:model="category" placeholder="Category">
    </div>

    <div class="form-group mb-2">
        <label for="currentlesson">Current Lesson</label>
        <input type="number" class="form-control" id="currentlesson" wire:model="currentlesson" placeholder="Current Lesson">
    </div>

    <div class="form-group mb-2">
        <label for="totallesson">Total Lesson</label>
        <input type="number" class="form-control" id="totallesson" wire:model="totallesson" placeholder="Total Lesson">
    </div>

    <div class="form-group mb-2">
        <label for="img_url">Thumbnail course</label>
        <input type="file" class="form-control-file" id="img_url" wire:model="img_url">
    </div>

    <button type="submit" class="btn btn-primary rounded">Submit</button>
</form>