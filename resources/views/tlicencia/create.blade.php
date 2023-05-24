@extends('layouts.app')

@section('template_title')
    Create Tlicencia
@endsection

@section('content')
<style>
   .row{
        justify-content: center;
    }
    .card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.card {
  box-sizing: border-box;
  width: auto;
  height: auto;
  background: hsl(105, 9%, 91%);
  border: 1px solid white;
  box-shadow: 12px 17px 51px rgba(0, 0, 0, 0.22);
  backdrop-filter: blur(6px);
  border-radius: 17px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s;
  display: flex;
  align-items: center;
  justify-content: center;
  user-select: none;
  font-weight: bolder;
  color: black;
  position: relative; /* Agregado */
}

.card:hover {
  border: 1px solid black;
  transform: scale(1.05);
}

.card:active {
  transform: scale(0.95) rotateZ(1.7deg);
}

.float-right {
  position: absolute;
  top: 2px;
  right: 0;
  margin-right: 10px;
}

@media screen and (max-width: 600px) {
  .card {
    width: 90vw;
    height: auto;
  }
  .btno {
 --color: #00A97F;
 --color2: rgb(10, 25, 30);
 padding: 0.8em 1.75em;
 background-color: transparent;
 border-radius: 6px;
 border: .3px solid var(--color);
 transition: .5s;
 position: relative;
 overflow: hidden;
 cursor: pointer;
 z-index: 1;
 font-weight: 300;
 font-size: 17px;
 font-family: 'EB Garamond', serif;
 text-transform: uppercase;
 color: var(--color);
}

.btno::after, .btno::before {
 content: '';
 display: block;
 height: 100%;
 width: 100%;
 transform: skew(90deg) translate(-50%, -50%);
 position: absolute;
 inset: 50%;
 left: 25%;
 z-index: -1;
 transition: .5s ease-out;
 background-color: var(--color);
}

.btno::before {
 top: -50%;
 left: -25%;
 transform: skew(90deg) rotate(180deg) translate(-50%, -50%);
}

.btno:hover::before {
 transform: skew(45deg) rotate(180deg) translate(-50%, -50%);
}

.btno:hover::after {
 transform: skew(45deg) translate(-50%, -50%);
}

.btno:hover {
 color: var(--color2);
}

.btno:active {
 filter: brightness(.7);
 transform: scale(.98);
}
}
.btn-conteiner {
  display: flex;
  justify-content: center;
  --color-text: #ffffff;
  --color-background: hsla(108, 100%, 20%, 0.502);
  --color-outline:#ffffff;
  --color-shadow: #ffffff;
}

.btn-content {
  display: flex;
  align-items: center;
  padding: 5px 10px;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  font-size: 15px;
  color: var(--color-text);
  background: var(--color-background);
  transition: 1s;
  border-radius: 30px;
  box-shadow: 0 0 0.2em 0 var(--color-background);
}

.btn-content:hover, .btn-content:focus {
  transition: 0.5s;
  -webkit-animation: btn-content 1s;
  animation: btn-content 1s;
  outline: 0.1em solid transparent;
  outline-offset: 0.2em;
  box-shadow: 0 0 0.4em 0 var(--color-background);
}

.btn-content .icon-arrow {
  transition: 0.5s;
  margin-right: 0px;
  transform: scale(0.6);
}

.btn-content:hover .icon-arrow {
  transition: 0.5s;
  margin-right: 25px;
}

.icon-arrow {
  width: 20px;
  margin-left: 15px;
  position: relative;
  top: 6%;
}
  
/* SVG */
#arrow-icon-one {
  transition: 0.4s;
  transform: translateX(-60%);
}

#arrow-icon-two {
  transition: 0.5s;
  transform: translateX(-30%);
}

.btn-content:hover #arrow-icon-three {
  animation: color_anim 1s infinite 0.2s;
}

.btn-content:hover #arrow-icon-one {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.6s;
}

.btn-content:hover #arrow-icon-two {
  transform: translateX(0%);
  animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */
@keyframes color_anim {
  0% {
    fill: white;
  }

  50% {
    fill: var(--color-background);
  }

  100% {
    fill: white;
  }
}

/* Button animations */
@-webkit-keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}

@keyframes btn-content {
  0% {
    outline: 0.2em solid var(--color-background);
    outline-offset: 0;
  }
}
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card ">
                    <div class="card-body">
                        <form method="POST" action="{{ route('tlicencias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tlicencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
