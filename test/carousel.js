// Liste des images (vous pouvez générer dynamiquement ce tableau côté serveur si nécessaire)
const images = [
    "../aunis_photos/aix.jpg",
    "../aunis_photos/corderie-royale.jpg",
    "../aunis_photos/fort-boyard.jpg",
    "../aunis_photos/ile-oleron.jpg",
  ];
  
  const carouselImagesContainer = document.getElementById('carousel-images');
  
  // Fonction pour charger les images dans le carrousel
  function loadCarouselImages() {
    images.forEach((image, index) => {
      const carouselItem = document.createElement('div');
      carouselItem.className = 'carousel-item' + (index === 0 ? ' active' : '');
      
      const img = document.createElement('img');
      img.src = image;
      img.className = 'd-block w-100';
      img.alt = 'Image ' + (index + 1);
  
      carouselItem.appendChild(img);
      carouselImagesContainer.appendChild(carouselItem);
    });
  }
  
  // Appel de la fonction pour charger les images
  loadCarouselImages();
  