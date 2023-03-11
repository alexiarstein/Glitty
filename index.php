<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/normalizar.css" />
<link rel="stylesheet" href="css/terminal.css" />
<script src="components/js/ge_ctc.js"></script>

<style>
<style>
    .components-grid {
      display: grid;
      grid-column-gap: 1.4em;
      grid-template-columns: auto;
      grid-template-rows: auto;
    }

    .image-grid {
      display: grid;
      grid-template-rows: auto;
      display: grid;
      grid-gap: 1em;
      grid-template-rows: auto;
      grid-template-columns: repeat(
        auto-fit,
        minmax(calc(var(--page-width) / 12), 1fr)
      );
    }

    @media only screen and (min-width: 70em) {
      .components-grid {
        grid-template-columns: 3fr 9fr;
      }
    }
  </style>
 <style>
      :root {
        --global-font-size: 15px;
        --global-line-height: 1.4em;
        --global-space: 10px;
        --font-stack: Menlo, Monaco, Lucida Console, Liberation Mono,
          DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace,
          serif;
        --mono-font-stack: Menlo, Monaco, Lucida Console, Liberation Mono,
          DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace,
          serif;
        --background-color: #222225;
        --page-width: 60em;
        --font-color: #e8e9ed;
        --invert-font-color: #222225;
        --secondary-color: #a3abba;
        --tertiary-color: #a3abba;
        --primary-color: #62c4ff;
        --error-color: #ff3c74;
        --progress-bar-background: #3f3f44;
        --progress-bar-fill: #62c4ff;
        --code-bg-color: #3f3f44;
        --input-style: solid;
        --display-h1-decoration: none;
      }
    </style>
<title>Document</title>
</head>
<body class="terminal">
<header class="terminal-logo">
 <div class="logo terminal-prompt"><a href="https://lachicadesistemas.com.ar" class="no-style"> La Chica de Sistemas:  /alexia/blog</a></div>
</header>
<nav class="terminal-menu">
<ul vocab="https://schema.org/" typeof="BreadcrumbList">
<li><a href="alexia.php" class="menu-item"><span>Alexia</span></a><meta property="position"></li>
<li><a href="https://youtube.com/@lachicadesistemas">La Chica de Sistemas (Youtube)</a></li>
<li><a href="https://instagram.com/lachicadesistemas">Instagram</a></li>
<li><a href="https://github.com/alexiarstein/Glitty">Glitty</a></li>
</ul>
</nav>
</div>
</div>

<article class="container">
<div class="blog">
<?php include('main.php'); ?>
</div>
</article>
<footer>
<br /> <!-- esto no es ideal, peero... -->

<p>Blog creado con <a href="https://github.com/alexiarstein/Glitty">Glitty by Alexia Rivera</a> con Amor. <3 Viva el Open Source.
</footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("pre code").forEach(block => {
      window.hljs.highlightBlock(block);
    });
  });
</script>

</body>
</html>
