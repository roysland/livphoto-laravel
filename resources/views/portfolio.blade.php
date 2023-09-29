@extends("layouts.default")
@section('title', $cat)
@section("content")
@if ($session === 'yes')
<div class="upload">
    <form action="{{route('portfolio.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category" value="{{$cat}}">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
</div>
@endif
<section class="image-grid">
@foreach($images as $image)
<figure data-id="{{$image->id}}" data-order="{{$image->gallery_order}}" data-folder={{$image->category}} data-src={{$image->url}} tab-index="0">
    <picture>
        <source media="(min-width: 768px)" srcset={{ $image->url }} />
        <source media="(min-width: 0px)" srcset={{ $image->url }} />
        <img src={{ $image->url }} alt="" />
    </picture>
</figure>
@endforeach
</section>
<ul class="other-categories" hx-boost="true">
    @foreach($categories as $category)
        @if($category !== $cat)
            <li><a href="{{ route('portfolio.index') }}?category={{$category}}">{{ $category}}</a></li>
        @endif
    @endforeach
</ul>
<pre><b>session</b>
@if($session)

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
@endif
</pre>
</section>
@endsection

@section('script')
@if ($session === 'yes' ?? false)
<script>
    function createAdminBar(el) {
        const adminBar = document.createElement('div');
        adminBar.classList.add('admin-bar', 'hidden');
        adminBar.innerHTML = `
            <button class="up">Up</button>
            <button class="down">Down</button>
            <button class="delete">Delete</button>
            <button class="edit">Edit</button>
        `;
        el.appendChild(adminBar);

        adminBar.querySelector('.up').addEventListener('click', () => handleMoveUp(el));
        adminBar.querySelector('.down').addEventListener('click', () => handleMoveDown(el));
        adminBar.querySelector('.delete').addEventListener('click', () => handleDelete(el));
        adminBar.querySelector('.edit').addEventListener('click', () => handleEdit(el));

        return adminBar
    }

    function replaceSection(html) {
        const oldSection = document.querySelector('.image-grid');
        oldSection.innerHTML = html;
        attachAdminBars();
    }

    async function handleMoveUp(el) {
        const id = el.dataset.id;
        console.log(id);
        axios.get(`/portfolio/${id}/move-up`)
            .then(response => {
                replaceSection(response.data);
            })
            .catch(error => {
                console.log(error);
            });
    }

    async function handleMoveDown(el) {
        const id = el.dataset.id;
        axios.get(`/portfolio/${id}/move-down`)
            .then(response => {
                replaceSection(response.data);
            })
            .catch(error => {
                console.log(error);
            });
    }

    async function handleDelete(el) {
        const id = el.dataset.id;
        console.log(id);
        if (confirm('Are you sure you want to delete this image?')) {
            axios.get(`/portfolio/${id}/delete`)
            .then(response => {
                replaceSection(response.data);
            })
            .catch(error => {
                console.log(error);
            });
        }
    }

    async function handleEdit(el) {
        const id = el.dataset.id;
        console.log(id);
    }

    function attachAdminBars() {
        const images = document.querySelectorAll('figure');
        images.forEach(image => {
            const adminBar = createAdminBar(image);
        });
    }


    async function main() {
        attachAdminBars();
    }

    main();
</script>
@endif
@endsection