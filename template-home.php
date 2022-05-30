<?php
/*
 * Template Name: Home Page Template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">
        <?php
        $args = [
            'prefix' => 'hp_slider_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'hero', $args);
        ?>

        <?php
        $args = [
            'prefix' => 'hp_lb_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'latest-blog', $args);
        ?>


        <div>
            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum facere officia reprehenderit velit. At aut
                    dolor dolorum eos magnam modi natus nulla, odio voluptatem voluptates? Amet laboriosam molestias reiciendis
                    rerum.
                </p>
                <p>A ab, aliquid dicta dolores facilis fugiat illum iste libero, modi repellat, repellendus sed suscipit
                    tempore velit voluptas. Pariatur perferendis repellat ullam? Est illum mollitia quis. Beatae fugit magni
                    quo!
                </p>
                <p>A ab accusamus eaque facilis harum id illum inventore labore laboriosam molestias, necessitatibus
                    praesentium quae quam quidem ratione recusandae reiciendis repellat repudiandae similique sint sunt
                    temporibus tenetur. Inventore, iure, sed.
                </p>
                <p>A ad consequuntur debitis eaque error facere facilis fugit illo itaque libero maiores, molestiae nam neque
                    officiis recusandae, repellendus reprehenderit sapiente similique sit soluta tempora veritatis voluptas
                    voluptatem! Quos, sint!
                </p>
                <p>Aliquid debitis dolor dolore doloremque dolorum eligendi facilis iure praesentium quis quod, sint sit
                    temporibus veritatis voluptate voluptatem. A asperiores aspernatur, dolorem et illo laboriosam perferendis
                    praesentium quas quisquam repellendus.
                </p>
                <p>Aliquid consequuntur debitis ea est itaque libero magni mollitia pariatur, sit. Adipisci aliquam commodi
                    doloremque, ea, et fugiat id, minima pariatur quae quos rem soluta. Eos fugiat nulla qui quod.
                </p>
                <p>Adipisci aut beatae consectetur eius fugiat id magnam nemo obcaecati odit temporibus! Assumenda eligendi
                    quibusdam tempore veritatis? Alias amet consequatur dolore excepturi harum iusto nihil nisi, pariatur
                    reprehenderit similique vero!
                </p>
                <p>Alias distinctio dolores doloribus error eveniet iure neque recusandae similique! Aut dolore eveniet,
                    labore maiores nam nesciunt perspiciatis quidem quis vitae voluptatem? Aut fuga inventore nam optio quam
                    quos rerum!
                </p>
                <p>Consectetur delectus doloremque doloribus eligendi exercitationem explicabo iste minus officia, quam quasi.
                    Dolorum eaque facere odio placeat voluptatibus! Accusamus architecto consequatur distinctio eaque excepturi
                    hic laudantium nostrum quas vero voluptatem?
                </p>
                <p>Alias assumenda consequuntur dicta eaque ex facere fugiat harum in ipsa iusto nesciunt non nulla quibusdam
                    quis ratione recusandae sit soluta tempora, temporibus tenetur unde voluptatem voluptatibus. Blanditiis,
                    sequi ut?
                </p>
                <p>Animi atque deserunt dolores ea, facilis harum ipsum iure placeat provident quae quaerat quis repellendus
                    reprehenderit sapiente, sed. Aliquam dolore dolores, error esse numquam quasi veniam! Adipisci assumenda
                    dolores veritatis?
                </p>
                <p>Amet at atque aut cupiditate distinctio eius hic impedit in inventore laudantium modi neque nostrum, odit
                    quia quis quo quod quos reprehenderit rerum, tempora temporibus vel vitae, voluptas voluptates voluptatum?
                </p>
                <p>Accusamus aperiam beatae, delectus distinctio illum laudantium modi obcaecati praesentium quaerat quasi
                    saepe sapiente soluta sunt veritatis voluptas! Alias autem commodi eius et harum maxime pariatur qui
                    recusandae reprehenderit sapiente!
                </p>
                <p>Culpa deleniti, dolor doloribus ex mollitia nisi odit placeat quae quibusdam temporibus vitae voluptas?
                    Aliquam consectetur debitis expedita itaque molestias qui ratione sit veniam vitae voluptatem. Cumque itaque
                    placeat quod.
                </p>
                <p>Ab alias animi aspernatur, commodi consectetur cumque dicta eveniet expedita facilis fuga libero magni nam
                    nobis nostrum optio perspiciatis porro possimus qui quo quod reiciendis temporibus tenetur totam velit
                    veniam.
                </p>
                <p>Ab animi cum cumque distinctio, ea, eligendi et eveniet ex excepturi expedita illum libero magni molestias
                    nemo nesciunt nisi, nobis omnis placeat quam quia quod recusandae sapiente tempora tempore voluptatibus?
                </p>
                <p>Commodi deserunt dolore, doloribus, error ex incidunt ipsum, libero magnam odit omnis praesentium qui
                    tempore veritatis. Consequatur eum modi nesciunt reprehenderit tempora! Cumque dicta doloribus est ipsam
                    obcaecati quo vero.
                </p>
                <p>Cupiditate omnis, quod. Commodi cum dignissimos eius est eveniet ex exercitationem, explicabo fuga ipsam
                    nihil porro repellat, repellendus, rerum sapiente sunt temporibus voluptatum. A beatae laborum nobis quasi
                    veniam voluptatem?
                </p>
                <p>Expedita harum nostrum nulla numquam quod! Ad asperiores autem beatae culpa dicta doloremque ea earum eos,
                    eum id impedit iste minima molestias optio placeat praesentium quasi quos rerum temporibus voluptas.
                </p>
                <p>Asperiores est et impedit nihil reiciendis. Autem beatae consectetur corporis culpa harum hic, ipsum iste,
                    laudantium nemo nesciunt reiciendis tempore voluptatem? Dignissimos et, explicabo minima nulla praesentium
                    quia veritatis voluptas.
                </p>
            </div>
        </div>
	</main>

<?php get_footer(); ?>
