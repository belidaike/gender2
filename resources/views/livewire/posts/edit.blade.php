<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center mt-5"><b>Edit Post</b></h1>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="title">
                    <label for="title">Title</label>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="content">
                    <label for="content">Content</label>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn" type="submit" wire:click="editPost()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    .card {
        background-color: #1b1b1b;
    }
    b{
        color: #ffa31a;
    }
    .btn {
        background-color: #ffa31a;
    }
    .btn:hover{
        background-color: blue;
        color: white;
    }
</style>
