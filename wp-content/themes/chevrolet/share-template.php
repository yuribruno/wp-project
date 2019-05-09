<ul class="share-buttons">
    <li>
        <a class="share-whatsapp" href="https://wa.me/?text=<?php the_permalink();?> <?php the_title(); ?>
" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </li>
    <li>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <!-- <li>
        <a class="share-menseger" href="" target="_blank">
            <i class="fab fa-facebook-messenger"></i>
        </a>
    </li> -->
    <li>
        <a class="share-linkedin" href="https://www.linkedin.com/shareArticle?url=<?php the_permalink();?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </li>
    <li>
        <a class="share-twitter" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=WPCrumbs" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
</ul>