<?php get_header(); ?>

<section id="home" class="pt-32 pb-16 md:pt-40 relative">
    <div class="container mx-auto px-4">
        <div class="flex flex-col px-4 py-48 rounded-3xl items-center justify-center text-center h-[75vh] shadow bg-cover bg-center bg-no-repeat" 
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/home/banner.avif');">
            
            <span class="text-3xl font-bold mb-4 text-white">Olá, Eu sou o</span>

            <h1 class="text-4xl md:text-6xl font-bold leading-snug text-white">Pedro Eugelmi</h1>

            <h2 class="text-2xl md:text-3xl font-bold mt-8 text-white">
                E eu sou <span id="typed" class="text-main text-shadow"></span>
            </h2>

            <p class="text-lg mt-4 text-gray-200 max-w-2xl">
                Desenvolvendo web apps, automações, lojas virtuais e sistemas.
            </p>

            <div class="flex justify-center items-center mt-6 gap-4">
                <a title="Ir para o linkedin" target="_blank" href="https://www.linkedin.com/in/pedro-eugelmi-3124a323a/"
                   class="text-white text-3xl hover:text-main transition inline-flex justify-center items-center border-2 border-main-color rounded-full w-10 h-10 mb-4">
                    <i class="bx bxl-linkedin"></i>
                </a>
                <a title="Ir para o github" target="_blank" href="https://github.com/Pedro-Eugelmi"
                   class="text-white text-3xl hover:text-main transition inline-flex justify-center items-center border-2 border-main-color rounded-full w-10 h-10 mb-4">
                    <i class="bx bxl-github"></i>
                </a>
            </div>
            
        </div>
    </div>
</section>

<?php echo get_footer(); ?>