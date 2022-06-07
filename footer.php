        </div>
        <!--close content class tag-->
        <footer class="page-footer">

            <div class="page-footer__inner container">
                <p class="copyright">&copy; <?php echo date("Y"); ?> MoGo free PSD template by Laaqiq</p>
            </div>

        </footer>
    </div>
    <!--close wrapper class tag-->
<?php wp_footer(); ?>

    <!-- Search Modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" aria-labelledby="search-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="search-modal-label">Search Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="s-form" action="<?php echo home_url( '/' ); ?>">
                        <div class="form-group row align-items-center">
                            <div class="col-12 col-sm-8">
                                <input class="form-control m-0" type="search" name="s" placeholder="<?php _e('Search the site', 'theme'); ?>">
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn ">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
