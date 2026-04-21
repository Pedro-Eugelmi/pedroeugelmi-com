<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/Favicon.ico" type="image/x-icon">
    
    <meta property="og:title" content="Pedro Eugelmi - Developer" />
    <meta property="og:description" content="Especialista em soluções escaláveis de E-commerce e Automação." />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/home/banner.avif" />
    <meta property="og:url" content="<?php echo home_url(); ?>" />
    
    <?php wp_head(); ?>
</head>
<body>
    

<header class="fixed top-0 left-0 w-full bg-bg-color z-50 p-4">
  <div class="container mx-auto flex justify-between items-center">
    <a class="logo" tabindex="-1" href="/" data-discover="true">
      <img alt="Pedro Eugelmi" class="h-14 xl:h-20" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png">
    </a>
    
    <button aria-label="Abrir menu" tabindex="-1" class="lg:hidden cursor-pointer">
      <i class="bx bx-menu text-5xl flex"></i>
    </button>

    <nav class="navbar text-[17px] gap-6 lg:flex items-center hidden">
      <a class="text-main-hover transition duration-300 text-main" href="<?php echo home_url('#home'); ?>" data-discover="true" title="Ir para a página inicial">Início</a>
      <a class="text-main-hover transition duration-300" href="<?php echo home_url('#about_me'); ?>" data-discover="true" title="Saiba mais sobre mim">Sobre Mim</a>
      <a class="text-main-hover transition duration-300" href="<?php echo home_url('#skills'); ?>" data-discover="true" title="Ver habilidades e tecnologias">Habilidades &amp; Tecnologias</a>
      <a class="text-main-hover transition duration-300" href="<?php echo home_url('#projects'); ?>" data-discover="true" title="Ver projetos">Projetos</a>
      <a class="text-main-hover transition duration-300" href="<?php echo home_url('#contact'); ?>" data-discover="true" title="Entrar em contato">Contato</a>
    </nav>
  </div>

</header>