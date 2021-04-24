<!DOCTYPE html>
<html lang="en">

<head>
  @include('templates.partials._head')
</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

@include('templates.partials._load')

{{-- Début APP --}}
<div id="app">

@include('templates.partials._nav')

{{-- Template de la page Home --}}
@include('templates.partials._headerHome')

{{-- Template des Pages --}}
{{-- @include('templates.partials._headerPage') --}}


{{-- Début Zone Dynamique --}}

{{--

@include('templates.partials._sectionIcones')

@include('templates.partials._sectionTeam')

@include('templates.partials._sectionRecentWork')

@include('templates.partials._sectionEmail')

@include('templates.partials._sectionLogos')

--}}

{{-- Fin de Zone Dynamique --}}


@include('templates.partials._sectionAndFooter')

    </div>

@include('templates.partials._bandeDroite')

</div>
{{-- FIN APP --}}

@include('templates.partials._scripts')

</body>

</html>
