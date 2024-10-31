document.addEventListener("DOMContentLoaded", function() {
  const cards = document.querySelectorAll('.flip-card-inner'); // Tüm kartları seçiyoruz

  cards.forEach((card) => {  // Her kart için bir olay dinleyici ekliyoruz
    card.addEventListener('click', function() {
      card.classList.toggle('is-flipped');  // Tıklanan karta 'is-flipped' sınıfını ekliyoruz veya kaldırıyoruz
    });
  });
})