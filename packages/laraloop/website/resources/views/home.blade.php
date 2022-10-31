@extends('website::layouts.app', ['title' => 'Laraloop'])

@section('content')
  <div class="row justify-content-center align-items-center">
{{--    <div class="col-8 mx-auto col-lg-4 order-lg-2 col-xl-5">--}}
{{--      <svg xmlns="http://www.w3.org/2000/svg" width="600" height="533" class="img-fluid mb-3 mb-md-0" role="img"--}}
{{--           viewBox="0 0 900 800"><title>Bootstrap</title>--}}
{{--        <defs>--}}
{{--          <filter id="filter0_d" width="704" height="623.928" x="98" y="96" color-interpolation-filters="sRGB"--}}
{{--                  filterUnits="userSpaceOnUse">--}}
{{--            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>--}}
{{--            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>--}}
{{--            <feOffset dy="8"></feOffset>--}}
{{--            <feGaussianBlur stdDeviation="16"></feGaussianBlur>--}}
{{--            <feColorMatrix values="0 0 0 0 0.423529 0 0 0 0 0.0666667 0 0 0 0 0.956863 0 0 0 0.25 0"></feColorMatrix>--}}
{{--            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>--}}
{{--            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>--}}
{{--          </filter>--}}
{{--          <filter id="filter1_d" width="704" height="623.928" x="98" y="96" color-interpolation-filters="sRGB"--}}
{{--                  filterUnits="userSpaceOnUse">--}}
{{--            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>--}}
{{--            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>--}}
{{--            <feOffset dy="8"></feOffset>--}}
{{--            <feGaussianBlur stdDeviation="16"></feGaussianBlur>--}}
{{--            <feColorMatrix values="0 0 0 0 0.423529 0 0 0 0 0.0666667 0 0 0 0 0.956863 0 0 0 0.25 0"></feColorMatrix>--}}
{{--            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>--}}
{{--            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>--}}
{{--          </filter>--}}
{{--          <filter id="filter2_d" width="260.144" height="302.767" x="327.804" y="252.368"--}}
{{--                  color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">--}}
{{--            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>--}}
{{--            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>--}}
{{--            <feOffset dy="4"></feOffset>--}}
{{--            <feGaussianBlur stdDeviation="8"></feGaussianBlur>--}}
{{--            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>--}}
{{--            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>--}}
{{--            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>--}}
{{--          </filter>--}}
{{--          <filter id="filter3_d" width="261.369" height="303.992" x="327.192" y="251.755"--}}
{{--                  color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">--}}
{{--            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>--}}
{{--            <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>--}}
{{--            <feOffset dy="4"></feOffset>--}}
{{--            <feGaussianBlur stdDeviation="8"></feGaussianBlur>--}}
{{--            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"></feColorMatrix>--}}
{{--            <feBlend in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>--}}
{{--            <feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>--}}
{{--          </filter>--}}
{{--          <linearGradient id="paint1_linear" x1="211.405" x2="769.059" y1="251.5" y2="494.972"--}}
{{--                          gradientUnits="userSpaceOnUse">--}}
{{--            <stop offset="0" stop-color="#9013fe"></stop>--}}
{{--            <stop offset=".995" stop-color="#6610f2"></stop>--}}
{{--          </linearGradient>--}}
{{--          <linearGradient id="paint2_linear" x1="363.642" x2="515.493" y1="319.901" y2="465.49"--}}
{{--                          gradientUnits="userSpaceOnUse">--}}
{{--            <stop offset="0" stop-color="#fff"></stop>--}}
{{--            <stop offset="1" stop-color="#f1e5fc"></stop>--}}
{{--          </linearGradient>--}}
{{--          <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientTransform="rotate(90 25 425) scale(400)"--}}
{{--                          gradientUnits="userSpaceOnUse">--}}
{{--            <stop offset="0" stop-color="#ced4da"></stop>--}}
{{--            <stop offset="1" stop-color="#ced4da" stop-opacity="0"></stop>--}}
{{--          </radialGradient>--}}
{{--          <clipPath id="clip0">--}}
{{--            <path fill="#fff" d="M0 0h900v800H0z"></path>--}}
{{--          </clipPath>--}}
{{--        </defs>--}}
{{--        <g clip-path="url(#clip0)">--}}
{{--          <circle cx="450" cy="400" r="400" fill="url(#paint0_radial)"></circle>--}}
{{--          <path fill="#ffc107" fill-rule="evenodd" d="M138 539h98v46h-98v-46zm100-2v50H136v-50h102z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#ffc107" fill-rule="evenodd"--}}
{{--                d="M238 539h89a7 7 0 017 7v32a7 7 0 01-7 7h-89v-46zm89-2a9 9 0 019 9v32a9 9 0 01-9 9h-91v-50h91zm-281.816 0c-5.072 0-9.184 4.029-9.184 9v32c0 4.971 4.112 9 9.184 9H136v-50H45.184zM60 558a4 4 0 000 8h52a4 4 0 000-8H60z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#007bff" fill-rule="evenodd"--}}
{{--                d="M115 400a8 8 0 100-16 8 8 0 000 16zm0 2c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm-30 0c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm0-5a5 5 0 100-10 5 5 0 000 10zm53-15a4 4 0 00-4 4v12a4 4 0 004 4h12a4 4 0 004-4v-12a4 4 0 00-4-4h-12zm11.676 5.324a1.103 1.103 0 00-1.591.033l-5.115 6.517-3.084-3.084a1.105 1.105 0 00-1.562 1.563l3.898 3.898a1.103 1.103 0 001.589-.03l5.881-7.351a1.103 1.103 0 00-.016-1.546zM180 384h-12a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-12a2 2 0 00-2-2zm-12-2a4 4 0 00-4 4v12a4 4 0 004 4h12a4 4 0 004-4v-12a4 4 0 00-4-4h-12z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#adb5bd" fill-rule="evenodd"--}}
{{--                d="M473 554c0-5.523 4.477-10 10-10h260c5.523 0 10 4.477 10 10v130.125c0 5.523-4.477 10-10 10H626.646a7.994 7.994 0 00-5.64 2.327l-6.596 6.556c-.78.776-2.04.776-2.82 0l-6.596-6.556a7.994 7.994 0 00-5.64-2.327H483c-5.523 0-10-4.477-10-10V554zm10-8a8 8 0 00-8 8v29h276v-29a8 8 0 00-8-8H483zm268 39H475v99.125a8 8 0 008 8h116.354a10 10 0 017.05 2.908L613 701.59l6.596-6.557a10 10 0 017.05-2.908H743a8 8 0 008-8V585z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#007bff" fill-rule="evenodd"--}}
{{--                d="M503 74c0-5.523 4.477-10 10-10h260c5.523 0 10 4.477 10 10v160c0 5.523-4.477 10-10 10H513c-5.523 0-10-4.477-10-10V74zm10-8a8 8 0 00-8 8v29h276V74a8 8 0 00-8-8H513zm268 39H505v97h276v-97zm0 99H644v38h129a8 8 0 008-8v-30zm-139 38v-38H505v30a8 8 0 008 8h129z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#007bff" fill-rule="evenodd"--}}
{{--                d="M756.293 79.293a1 1 0 011.414 0L762 83.586l4.293-4.293a1 1 0 111.414 1.414L763.414 85l4.293 4.293a1 1 0 11-1.414 1.414L762 86.414l-4.293 4.293a1 1 0 11-1.414-1.414L760.586 85l-4.293-4.293a1 1 0 010-1.414z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#007bff"--}}
{{--                d="M673 223a4 4 0 014-4h72a4 4 0 010 8h-72a4 4 0 01-4-4zm-140 0a4 4 0 014-4h72a4 4 0 010 8h-72a4 4 0 01-4-4z"></path>--}}
{{--          <path fill="#e83e8c" fill-rule="evenodd"--}}
{{--                d="M757 432H475a7 7 0 00-7 7v32a7 7 0 007 7h282a7 7 0 007-7v-32a7 7 0 00-7-7zm-282-2a9 9 0 00-9 9v32a9 9 0 009 9h282a9 9 0 009-9v-32a9 9 0 00-9-9H475zm310 0a9 9 0 00-9 9v32a9 9 0 009 9h72a9 9 0 009-9v-32a9 9 0 00-9-9h-72zm10 21a4 4 0 000 8h52a4 4 0 000-8h-52z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#dc3545" fill-rule="evenodd"--}}
{{--                d="M825 336H541a6 6 0 100 12h284a6 6 0 100-12zm-284-2a8 8 0 000 16h284a8 8 0 000-16H541z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#dc3545" d="M533 342a8 8 0 018-8h242v16H541a8 8 0 01-8-8z"></path>--}}
{{--          <path fill="#adb5bd" fill-rule="evenodd"--}}
{{--                d="M57 271a6 6 0 00-6 6v28a6 6 0 006 6h81.515a6 6 0 014.242 1.757l7.536 7.536a1 1 0 001.414 0l7.536-7.536a6 6 0 014.242-1.757H245a6 6 0 006-6v-28a6 6 0 00-6-6H57zm33 16a4 4 0 000 8h122a4 4 0 000-8H90z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#20c997" fill-rule="evenodd"--}}
{{--                d="M253 157c0-5.523-4.477-10-10-10H141c-5.523 0-10 4.477-10 10v39a1 1 0 002 0v-39a8 8 0 018-8h102a8 8 0 018 8v39a1 1 0 001 1h198a1 1 0 000-2H253v-38z"--}}
{{--                clip-rule="evenodd"></path>--}}
{{--          <path fill="#20c997" d="M151 174a4 4 0 014-4h72a4 4 0 010 8h-72a4 4 0 01-4-4z"></path>--}}
{{--        </g>--}}
{{--      </svg>--}}
{{--    </div>--}}

    <div class="col-lg-8 text-center">
      <h1 class="display-1 fw-bold mb-4">Build the web with Bootstrap &amp; Blade</h1>
      <p class="lead mb-4">
        Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end
        open source toolkit,
        and with Blade, the simple, yet powerful templating engine that is included with Laravel.
        Powered with Blade components which give your HTML superpowers!
      </p>

      <div class="text-center mb-4">
        <a href="/docs" class="btn btn-primary btn-lg me-3">Read the docs</a>
        <a href="/download" class="btn btn-outline-secondary btn-lg">Download</a>
      </div>

      <p class="text-muted">
        Currently <strong>v1.0.0</strong>
        <span class="px-1">·</span>
        <a href="/changelog" class="link-secondary">Changelog</a>
      </p>
    </div>
  </div>

  <div class="row align-items-center justify-content-center mt-5">
    <div class="col-12 col-lg-6">

      <div class="card shadow-lg rounded-3 bg-dark">
        <div class="card-header p-3" style="border-bottom: 1px solid #4b4e53">
          <div class="d-flex">
            <span class="bg-danger rounded-circle" style="width: 10px; height: 10px;"></span>
            <span class="bg-warning rounded-circle ms-2" style="width: 10px; height: 10px;"></span>
            <span class="bg-success rounded-circle ms-2" style="width: 10px; height: 10px;"></span>
          </div>
        </div>
        <div class="card-body text-white py-5 text-center h5" style="font-family: var(--bs-font-monospace);">
          $
          <span data-controller="typed">
            <span class="js-typed"></span>
          </span>
        </div>
      </div>

    </div>
  </div>
@endsection
