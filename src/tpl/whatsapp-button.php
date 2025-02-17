<a href="https://wa.me/<?= str_replace(['+', ' ', '-'], '', $telphone) ?>?text=Hello,%20I%20am%20interested%20in%20your%20cutting%20wheels!" 
   class="whatsapp-button" 
   target="_blank">
    <img src="images/whatsapp-logo.png" alt="WhatsApp" width="24" height="24">
    Chat on WhatsApp
</a>

<style>
    .whatsapp-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background-color: #25D366;
        color: white;
        padding: 12px 24px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .whatsapp-button:hover {
        background-color: #128C7E;
        color: white;
    }
</style> 