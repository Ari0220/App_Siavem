@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../resources/css/Home.css">
<title>Home</title>
<style> 
  Body div .main-home h1 {
    text-align: center;
    font-family: 'EB Garamond', serif;
  }
  
  body div .descrip {
    font-family: 'EB Garamond', serif;
    font-size: 1.5rem;
    text-align: center;
  }
--------------------------------------
article {
  --img-scale: 1.001;
  --title-color: black;
  --link-icon-translate: -10px;
  --link-icon-opacity: 0;
  position: relative;
  border-radius: 16px;
  box-shadow: none;
  background: #fff;
  transform-origin: center;
  transition: all 0.4s ease-in-out;
  overflow: hidden;
}
.container h1:last-child {
  margin-bottom: 0;
}
article a::after {
  position: absolute;
  inset-block: 0;
  inset-inline: 0;
  cursor: pointer;
  content: "";
}

/* basic article elements styling */
article h2 {
  margin: 0 0 18px 0;
  font-family: 'EB Garamond', serif;
  font-size: 1.2rem;
  letter-spacing: 0.06em;
  color: var(--title-color);
  transition: color 0.3s ease-out;
}

figure {
  margin: 0;
  padding: 0;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

article img {
  max-width: 100%;
  transform-origin: center;
  transform: scale(var(--img-scale));
  transition: transform 0.4s ease-in-out;
}

.article-body {
  padding: 24px;
}

article a {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  color: #28666e;
}

article a:focus {
  outline: 1px dotted #28666e;
}

article a .icon {
  min-width: 24px;
  width: 24px;
  height: 24px;
  margin-left: 5px;
  transform: translateX(var(--link-icon-translate));
  opacity: var(--link-icon-opacity);
  transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
  --img-scale: 1.1;
  --title-color: #28666e;
  --link-icon-translate: 0;
  --link-icon-opacity: 1;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


/************************ 
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
  box-sizing: border-box;
}

.articles {
  display: grid;
  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}
.encargados{
  display: grid;
  justify-content: center;
  max-width: 900px;
  align-items: center;
  margin-inline: auto;
  padding-inline: 24px;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}


@media screen and (max-width: 960px) {
  article {
    container: card/inline-size;
  }
  .article-body p {
    display: none;
  }
}

@container card (min-width: 380px) {
  .article-wrapper {
    display: grid;
    grid-template-columns: 100px 1fr;
    gap: 16px;
  }
  .article-body {
    padding-left: 0;
  }
  figure {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  figure img {
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
  }
}

.sr-only:not(:focus):not(:active) {
  clip: rect(0 0 0 0); 
  clip-path: inset(50%);
  height: 1px;
  overflow: hidden;
  position: absolute;
  white-space: nowrap; 
  width: 1px;
}
.shield-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.shield-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}


.logo-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.logo-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}

.logo-figure {
  width: 200px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 200px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 auto; /* Centra el contenedor horizontalmente */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.logo-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}


.main-home {
  background-image: url('images/Fondo3.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  height: 100vh; /* Ajusta la altura al 100% del viewport */
  color: white; /* Cambiar el color del texto a blanco */
  margin: 0; /* Eliminar el margen */
  /* Otras propiedades de estilo que desees agregar */
}

.container {
  text-align: center;
  margin-bottom: 20px; /* Margen inferior para separar el texto del borde */
}

.encargados {
  display: flex;
  justify-content: center;
  align-items: center;
}

.encargado-figure {
  width: 150px; /* Ajusta el ancho del contenedor según tus necesidades */
  height: 150px; /* Ajusta la altura del contenedor según tus necesidades */
  margin: 0 10px; /* Ajusta los márgenes laterales según tus necesidades */
  overflow: hidden; /* Oculta cualquier parte de la imagen que exceda el contenedor */
}

.encargado-figure img {
  width: 100%; /* Ajusta el ancho de la imagen al 100% del contenedor */
  height: auto; /* Permite que la altura de la imagen se ajuste automáticamente */
}

</style>
</head> 
<body>
<div class="main-home">
  <div class="container">
    <h1><strong>BIENVENIDOS A LA UNIDAD DE TRANSPORTE</strong></h1>
  </div>
  <div class="descrip">
  </div>
</div>
<br>
<br>
<br>
<h1 class="container"
class="text-center" > <strong>Encargados</strong></h1>
<br>
<br>
</section>
<section class="encargados">
  <article>
    <div class="article-wrapper">
      <figure class="encargado-figure">
        <img src="images/USUARIO2.png" alt="" />
      </figure>
      <div class="article-body">
        <h2>Alcaldía Santa Cruz</h2>
        <p>Mtr. Jorge Alfaro Orias</p>
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure class="encargado-figure">
        <img src="images/USUARIO1.png" alt="" />
      </figure>
      <div class="article-body">
        <h2>Unidad de Transporte</h2>
        <p>Lic. Amalia Gutierrez</p>
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure class="encargado-figure">
        <img src="images/USUARIO2.png" alt="" />
      </figure>
      <div class="article-body">
        <h2>Unidad de informática</h2>
        <p>Mtr. Manrique Solorzano</p>
      </div>
    </div>
  </article>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="container"
class="text-center" > <strong>Entidades Encargadas</strong></h1>
<br>
<br>
</section>
<section class="encargados">

<article>
  <div class="article-wrapper">
    <figure class="logo-figure">
      <img src="images/Sin título-62.jpg" alt="" />
    </figure>
    <div class="article-body">
      <h2>Universidad Nacional</h2>
    </div>
  </div>
</article>


  <article>
  <div class="article-wrapper">
    <figure class="logo-figure">
      <img src="images/aa.png" alt="" />
    </figure>
    <div class="article-body">
      <h2>Sede regional Chorotega</h2>
    </div>
  </div>
</article>


  <article>
  <div class="article-wrapper">
    <figure class="shield-figure">
      <img src="images/Sin título-51.jpg" alt="" />
    </figure>
    <div class="article-body">
      <h2>Municipalidad de Santa Cruz</h2>
    </div>
  </div>
</article>



 
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="container"
class="text-center" > <strong>Desarrolladores</strong></h1>
<br>
<br>

<section class="articles">

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="images/Daniela.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>BACK-END</h2>
        <p> Daniela Chaves Aguirre
        </p>
        
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="images\Ariana.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>FRONT-END</h2>
        <p> Ariana Leal Villafuerte
        </p>
       
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="images/YUSTIN.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>BACK-END</h2>
        <p> Yustin Lopez Salas
        </p>
       
      </div>
    </div>
  </article>

  <article>
    <div class="article-wrapper">
      <figure>
        <img src="images/ABIGAIL.jpeg" alt="" />
      </figure>
      <div class="article-body">
        <h2>FRONT-END</h2>
        <p> Abigail Espinoza Herrera
        </p>
        
      </div>
    </div>
  </article>
</body>
</html>

@endsection