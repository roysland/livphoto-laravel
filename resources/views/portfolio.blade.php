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
<button class="toggleAdmin" onclick="toggleAdmin()">Skru av/på admin</button>
@endif
<section class="image-grid">
@foreach($images as $image)
<figure data-id="{{$image->id}}" data-description="{{$image->description}}" data-order="{{$image->gallery_order}}" data-folder={{$image->category}} data-src={{$image->url}} tab-index="0">
    <picture id="{{$image->category}}-{{$image->id}}">
        <source media="(min-width: 768px)" srcset={{ $image->url }} />
        <source media="(min-width: 0px)" srcset={{ $image->url }} />
        <img src={{ $image->url }} alt="" />
    </picture>
    @if ($image->description)
    <caption class="caption">
        <p>{{$image->description}}</p>
    </caption>
    @endif
</figure>
@endforeach
</section>
<ul class="other-categories" hx-boost="true">
    <li><a href="{{ route('bio.index') }}">Bio</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Clean Beauty">Clean Beauty</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Beauty">Beauty</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Makeup Art">Makeup Art</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Fashion">Fashion</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Print and Media">Print and Media</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Music">Music</a></li>
    <li><a href="{{ route('portfolio.index') }}?category=Behind the scenes">Behind the scenes</a></li>
</ul>

@if($session)

<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@endif

</section>
@endsection

@section('script')
@if ($session === 'yes' ?? false)
<script>
    let adminActive = true
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

    function createEditForm (el) {
        el.classList.add('editing')
        const form = document.createElement('div');
        form.classList.add('edit-form');
        form.innerHTML = `
            <textarea>${el.dataset.description}</textarea>
            <button type="submit">Save</button>
        `;
        const textarea = form.querySelector('textarea');
        form.querySelector('button').addEventListener('click', () => saveDescription(textarea.value, el.dataset.id));
        return form;
    }

    async function saveDescription(description, id) {
        console.log(description, id)
        const gal = await axios.post(`/portfolio/${id}/edit`, {
            description: description
        })
        replaceSection(gal.data);
    }

    async function handleEdit(el) {
        const id = el.dataset.id;
        const form = createEditForm(el);
        el.appendChild(form);
        console.log(id);
    }

    function attachAdminBars() {
        const images = document.querySelectorAll('figure');
        images.forEach(image => {
            const adminBar = createAdminBar(image);
        });
    }

    function toggleAdmin () {
        document.querySelector('.image-grid').classList.toggle('admin-disabled')
    }

    async function main() {
        attachAdminBars();
    }

    main();
</script>
@endif
@endsection