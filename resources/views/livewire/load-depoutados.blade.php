<div>
  <form wire:submit="load">
    @csrf
    <div class="alert alert-info mt-5">Por se destinar some a um teste e por respeito ao dadosaberto somente
      alguns dados serão baixados para não sobrecarregar o serviço externo</div>
    <input type="hidden" wire:model="siglaUf">
    <button type="submit" class="btn btn-danger">Carregar deputados (RO)</button>
    @error('siglaUf')<div class="alert alert-danger text-center mt-1">{{ $message }}</div>@enderror
  </form>
</div>