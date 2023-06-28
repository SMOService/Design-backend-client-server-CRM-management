@section('meta_title', 'cart')
@section('meta_keywords', 'cart')
@section('meta_description', 'cart')

<x-app-layout>
    <main class="main d-flex flex-column">
        <section class="usection">
            @livewire('cart.order')
        </section>
    </main>
</x-app-layout>
