@extends("layouts.default")
@section('title', 'Bio & CV')

@section("content")
<main style="margin: 0 auto; max-width: 800px; padding: 1rem; font-size: 0.875rem;">
<p>Liv Jansen is a professional makeup/airbrush artist located in Norway. 
    Liv's passion for color and expression started at a young age were she spent ours painting and creating art in her bedroom. 
    This passion later grew into the expression that we now see today in her makeup artistry.</p>
<p>As a freelance makeup artist for almost 20 years, she has built an wide range in her portofolio and expertise working within 
    editorial and commercial work as well as print, video, film, and television. </p>
<p>She believes in expressing her creativity through art and 
she continues to evolve as a makeup artist by staying updated on the industry latest trends and  techniques.</p>
<p>Liv also conducts business internationally in citys like Los Angeles, Stockholm and Germany.
Her areas of expertise are commercial / editorial as well as high fashion, beauty, and runway makeup.</p>
<p>
Either you are a professional agency or an amature photographer, Livs goal will be to costumize her work to get the best end result for the job. 
As a educated and professional she wish to 
represent her vision in the fashion world and inspire others to see beauty in all forms. 
Being personable, out-going, professional, and determined has allowed her to succeed in her endeavours, 
and take a great pride in calling herself a makeup artist
</p>
<h1>Want to work with me?</h1>
<p>
For requesting a booking price please look link below 
<form action="{{ route('bio.store') }}" method="POST">
    @csrf
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="Enter your email address to request a quote" required>
<button type="submit">Request quote</button>
</form>
</p>
@if(session()->has('askedQuote'))

<table>
    <caption>Prisliste</caption>
    <thead>
        <tr>
            <th>Oppdrag</th>
            <th>Pris</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Reklame bedrift</td>
            <td>fra kr 5000 ( velg mellom halv eller hel dag)</td>
        </tr>
        <tr>
            <td>Musikk video</td>
            <td>etter avtale</td>
        </tr>
        <tr>
            <td>Foredrag i makeup for fotoskole eller privatpersoner</td>
            <td>Nybegynner kr 3000 per deltager</td>
        </tr>
        <tr>
            <td></td>
            <td>Avansert kr 4500 per deltager</td>
        </tr>
        <tr>
            <td>Amatør fotograf tfp shoot</td>
            <td>Enkel makeup kr 1850</td>
        </tr>
        <tr>
            <td></td>
            <td>Beauty kr 2900</td>
        </tr>
        <tr>
            <td></td>
            <td>Kreative makeup (se galleri makeup art som eksempel ) kr 4500</td>
        </tr>
    </tbody>
</table>
@endif

<h1>CV</h1>
<h3>Magazines</h3>
<div class="flex">
<span class="tag">Elle </span>
<span class="tag">Henne</span>
<span class="tag">Mag</span>
<span class="tag">Kk</span>
<span class="tag">Det Nye</span>
<span class="tag">Se og hør</span>
<span class="tag">FHM</span>
<span class="tag">Massiv </span>
</div>
<h3>Fashion</h3>
<div class="flex">
<span class="tag">Oslo Fashion Week </span>
<span class="tag">LA Fashion Week </span>
<span class="tag">Stockholm Fashion Week </span>
<span class="tag">Fashion Designer Fam Irvoll</span>
<span class="tag">Moods of Norway </span>
<span class="tag">Designer Vatle </span>
<span class="tag">Floyd jeans fall campain</span>
<span class="tag">Miss Norway</span>
<span class="tag">Hollywood fashion - ashgupta.com</span>
<span class="tag">Modastar swimwear Las Vegas </span>
<span class="tag">Germany team - Photoshoot Goldwell </span>
<span class="tag">Glo minerals </span>
<span class="tag">Marc jacops summer fragranse Photoshoot winner</span>
</div>
<h3>Music</h3>
<div class="flex">
<span class="tag">Madcon </span>
<span class="tag">Karpe diem </span>
<span class="tag">Paperboys</span>
<span class="tag">Sandra Lyng haugen</span>
<span class="tag">Tommy tee</span>
<span class="tag">Lars vaular </span>
<span class="tag">Samsaya </span>
<span class="tag">Onkel P</span>
<span class="tag">Winnie paperboys</span>
<span class="tag">Erik og Kris</span>
<span class="tag">Stemma Mwangi </span>
<span class="tag">Timbuktu rapper </span>
<span class="tag">Alexander with idol sanger </span>
<span class="tag">LidoLido</span>
<span class="tag">Tooji</span>
</div>
<h3>People</h3>
<div class="flex">
<span class="tag">Jens Stoltenberg </span>
<span class="tag">Minken Fosheim</span>
<span class="tag">Guri Scanche</span>
<span class="tag">Karita bekkemelem </span>
<span class="tag">Eldar Vågan</span>
<span class="tag">Erling Lae</span>
<span class="tag">Solveig Barstad</span>
<span class="tag">Øyvind Fjeldheim</span>
<span class="tag">Linni meister </span>
<span class="tag">Marianna Antonsen</span>
<span class="tag">Aylar Lie </span>
<span class="tag">Dorthe Skappel</span>
</div>
</main>
<style>
    h1, h3 {
        font-family: 'Playfair Display', sans-serif;
        font-weight: 300;
    }
    .flex {
        display: flex;
        flex-wrap: wrap;
    }
    .tag {

        color: rgba(255,255,255,0.5);
        padding: 0.5rem 1rem;
        margin: 0.5rem;
        display: inline-block;
        font-weight: 300;
        border-radius: 4px;
        font-family: 'Playfair Display', sans-serif;
        display: inline-flex;
        text-align: center;
        justify-content: center;
    }
@endsection