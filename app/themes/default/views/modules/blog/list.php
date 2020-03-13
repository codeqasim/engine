
<?php if(isset($category)){ echo $category; }else{ echo 'Latest'; } ?> Posts

<div class="inner posts">
    <div class="post-feed">
        <?php if($blog){ foreach ($blog as $b) { ?>
        <article data-id="<?php echo $b->id; ?>" class="post-card post tag-pakistan tag-achievements tag-git-auto-pull-on-live-server tag-industry post-card-large">
            <a class="post-card-image-link" href="<?php echo base_url('blog/details/'.strtolower(str_replace(' ','-',$b->name).'/'.str_replace(' ','-',$b->title))); ?>">
            <img class="post-card-image" sizes="(max-width: 1000px) 400px, 700px" src="<?php FCPATH.BLOGS. $b->image; ?>" alt="">
            </a>
            <div data-id="<?php echo $b->id; ?>" class="post-card-content">
                <a class="post-card-content-link" href="<?php echo base_url('blog/details/'.strtolower(str_replace(' ','-',$b->name).'/'.str_replace(' ','-',$b->title))); ?>">
                    <header class="post-card-header">
                        <div class="post-card-primary-tag">pakistan</div>
                        <h2 class="post-card-title"><?php echo $b->title; ?></h2>
                    </header>
                    <section class="post-card-excerpt">
                        <p><?php echo substr($b->description, 0, 100) . '...'; ?></p>
                    </section>
                </a>
                <footer class="post-card-meta">
                    <ul class="author-list">
                        <li class="author-list-item">
                            <div class="author-name-tooltip">
                                Qasim Hussain
                            </div>
                            <a href="#" class="static-avatar">
                            <img class="author-profile-image" src="/content/images/size/w100/2019/12/qasim-1.jpg" alt="Qasim Hussain">
                            </a>
                        </li>
                    </ul>
                    <div class="post-card-byline-content">
                        <span><a href="#">Qasim Hussain</a></span>
                        <span class="post-card-byline-date"><time datetime="2019-12-10"><?php echo date('d/m/Y', strtotime($b->created_at)); ?></time> <span class="bull">•</span> 2 min read</span>
                    </div>
                </footer>
            </div>
        </article>
        <?php } }else{ echo 'No record found'; } ?>

        <?php include 'side.php'; ?> 
    </div>
</div>


