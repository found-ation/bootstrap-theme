<footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-brand">iDevice</div>
                                <div class="mb-3">Build better websites</div>
                                <div class="icon-list-social mb-5">
                                 <a target="_blank" href="https://github.com/found-ation"><i class="fab fa-github-alt text-white fa-7x"></i></a>  
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Products</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'downloads'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Documents</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 4,
                                            'post_type' => 'documents'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>                                          
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Includes</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="javascript:void(0);">Utilities</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Components</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Layouts</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Code Samples</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Products</a></li>
                                            <li class="mb-2"><a href="javascript:void(0);">Affiliates</a></li>
                                            <li><a href="javascript:void(0);">Updates</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4 text-white lead">Legal</div>
                                        <ul class="list-unstyled mb-0">
                                            <?php 
                                            $homepageEvents = new WP_Query(array(
                                            'posts_per_page' => 8,
                                            'post_type' => 'legal'
                                            ));
                                            while($homepageEvents->have_posts()) {
                                            $homepageEvents->the_post(); ?>
                                            <li class="mb-2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-5">
                        <div class="row align-items-center">
                            <div class="col-md-6 lead">Copyright &copy; <?php bloginfo( 'name' ); ?> 2019 - <?php the_time('Y'); ?></div>
                        </div>
                    </div>
                </footer>


<?php wp_footer(); ?>

</body>
</html>