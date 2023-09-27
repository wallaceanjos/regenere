<?php
    get_header();
?>

<?php
    // Obtém o ID da página "rgnrmusic" pelo seu título
    $rgnrmusic_page = get_page_by_title('RGNRMusic');
    $logo_sponsor = get_template_directory_uri() . '/assets/images/sponsor/rgnrmusic.png';

    if ($rgnrmusic_page) {
        // Obtém o conteúdo da página
        $rgnrmusic_content = apply_filters('the_content', $rgnrmusic_page->post_content);
    } else {
        $rgnrmusic_content = 'Página não encontrada.';
    }
?>

<section class="page-section d-flex-column">
    <div class="container">
        <div class="grid-md-2 gap-16 mb-64">
            <div class="d-flex-column ratio-16x9" style="background:url(<?php echo esc_url($logo_sponsor); ?>)no-repeat center center/cover">
                <img src="<?php echo esc_url($logo_sponsor); ?>" alt="">
            </div>
            <div class="fw-700 fs-24 base-fg lh-32 sponsor d-flex-center-center">
                <!-- <h2 class="section-title mb-70 mb-sm-40 d-flex-column d-flex-center-center">
                            <span class="uppercase fw-700 fs-40 base-fg"><?php the_title() ?></span>
                            <svg class="understroke wow fadeIn mt--12" width="283" height="18" viewBox="0 0 283 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 14C14.321 14 23.8554 11.1914 34 11C44.0498 10.8104 53.7539 9.91089 63.7778 9.22222C75.9107 8.38866 88.4139 8 100.556 8C114.622 8 128.444 6 142.444 6C168.079 6 193.756 5 219.444 5C233.963 5 248.481 5 263 5C265.893 5 277.637 6.72636 279 4" stroke="#CEF955" stroke-width="8" stroke-linecap="round"/>
                            </svg>
                        </h2> -->
                <p class="m-0">
                    <?php
                        echo $rgnrmusic_content;
                    ?>
                </p>
                
            </div>
        </div>
        <div class="d-flex-center overflow-hidden" style="border-radius:50px">
            <iframe class="ratio-16x9" width="100%" src="http://www.youtube.com/embed/buKsMSgYT9E" frameborder="0" allowfullscreen></iframe>
        </div>
        
    </div>
</section>

<?php
    get_footer();
?>