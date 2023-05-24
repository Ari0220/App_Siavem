@extends('layouts.app')

@section('template_title')
    Create Traccione
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
</style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('tracciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('traccione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
