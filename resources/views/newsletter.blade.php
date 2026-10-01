<div>
    <h1>Abonnez-vous Ã notre newsletter</h1>

    <form method="POST" action="{{ route('newsletter.store') }}">
        @csrf
        
        <label for="email">Votre e-mail :</label>
        <input type="email" name="email" id="email" required>
        
        <button type="submit">S'inscrire</button>
    </form>
</div>