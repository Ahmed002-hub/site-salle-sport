@extends('base')

@section('title', 'Contact')

@section('content')
    <h2>Contact</h2>
    <p>Téléphone : 06 00 00 00 00</p>
    <p>Adresse : 5 Bd Louis XIV, 59800 Lille</p>
    
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9155085815687!2d3.067824011910601!3d50.62868637439642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sit!2sfr!4v1730715819658!5m2!1sit!2sfr" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <form>
        <label for="email">Votre Email :</label>
        <input type="email" id="email" name="email">
        <label for="demande">Votre Demande :</label>
        <input type="text" id="demande" name="demande">
        <label for="message">Votre Message :</label>
        <textarea id="message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
@endsection
