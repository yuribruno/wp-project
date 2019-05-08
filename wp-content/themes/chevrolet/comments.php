<?php
// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
 
    if ( post_password_required() ) { ?>
        <p class="nocomments">Este artigo está protegido por password. Insira-a para ver os comentários.</p>
    <?php
        return;
    }
?>
 
<div id="comments" style="margin: 30px 0;">
    
    <?php if ( have_comments() ) : ?>
 
        <ol class="commentlist">
            <?php wp_list_comments('type=comment'); ?>
        </ol>
 
        <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="pagination">
            <ul>
                <li class="older"><?php previous_comments_link('Anteriores'); ?></li>
                <li class="newer"><?php next_comments_link('Novos'); ?></li>
            </ul>
        </div>
        <?php endif; ?>
 
    <?php endif; ?>
 
    <?php if ( comments_open() ) : ?>
 
        <div id="respond">
            <h3>Deixe o seu comentário!</h3>
 
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <fieldset>
                    <?php if ( $user_ID ) : ?>
     
                    <p>Autentificado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>
     
                    <?php else : ?>
                    <div class="form-auth">
                        <div>
                            <label for="author">Nome:</label>
                            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <div class="form-auth">
                        <div style="width: 100%">
                            <label for="comment">Mensagem:</label>
                            <textarea name="comment" id="comment" rows="5" cols="" style="height: auto;"></textarea>
                        </div>
                    </div>
                    <input type="submit" class="commentsubmit" value="Enviar Comentário" style="background-color: #DDBE6C;border-radius: 10px;width: 244px;height: 50px;margin: 15px 0 0;border: 0;color: #FFFFFF;font-family: Lato;font-size: 19px;font-weight: 400;line-height: 24px;text-align: center;text-transform: uppercase;padding: 10px;" />
     
                    <?php comment_id_fields(); ?>
                    <?php do_action('comment_form', $post->ID); ?>
                </fieldset>
            </form>
            
            <p class="cancel"><?php cancel_comment_reply_link('Cancelar Resposta'); ?></p>
        </div>
     <?php else : ?>
        <h3>Os comentários estão fechados.</h3>
    <?php endif; ?>
</div>