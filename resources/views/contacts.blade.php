<x-layout>

<h1 class="contatti mb-5">Pagina Contatti</h1>

<form method="post" action="{{route('contactUs')}}">
@csrf
<div class="mb-3">

<!-- NOME -->
<label for="user" class="form-label">Inserisci Nome</label>
<input type="text" name="user" class="form-control" id="user" aria-describedby="emailHelp">
</div>

<!-- EMAIL -->
<div class="mb-3">

<label for="email" class="form-label">Inserisci Email</label>
<input type="email" name="email" class="form-control" id="email">
</div>

<!-- TESTO -->
<div class="mb-3">

<label for="message" class="form-label">Inserisci Testo</label>
<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>


</x-layout>