@if (session('msg'))
    <section class="msg-container">
        <ion-icon name="checkmark-circle" id="alert-icon"></ion-icon>
        <p class="mensagem">{{ session('msg') }}</p>
    </section>
@endif
