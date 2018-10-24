//initialisation diaporama

var diapo1 = Object.create(Diaporama);

var slide0 = Object.create(Slide); // objet du diaporama
slide0.initSlide("img/project3.jpg", "Découvrez mes travaux");

var slide1 = Object.create(Slide);
slide1.initSlide("img/slide1.jpg", "Cliquer sur le marqueur de la station souhaitée pour la sélectionner");

var slide2 = Object.create(Slide);
slide2.initSlide("img/slide2.jpg", "Cliquer sur réserver");

var slide3 = Object.create(Slide);
slide3.initSlide("img/signature.jpg", "Signer le formulaire et cliquer sur Valider");

var slide4 = Object.create(Slide);
slide4.initSlide("img/slide4.jpg", "Votre réservation est valable 20 minutes.");

var slide5 = Object.create(Slide);
slide5.initSlide("img/slide_fin.jpg", "Bonne promenade !");

slides.push(slide0);
slides.push(slide1);
slides.push(slide2);
slides.push(slide3);
slides.push(slide4);
slides.push(slide5);

diapo1.initDiapo(slides);