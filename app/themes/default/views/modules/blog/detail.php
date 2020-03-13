<div class="inner">
    <article class="post-full post tag-pakistan tag-achievements tag-git-auto-pull-on-live-server tag-industry ">
        <header class="post-full-header">
            <section class="post-full-tags">
                <a href="<?php echo base_url(); ?>blog/<?php echo ($blog->name); ?>"><?php echo strtoupper($blog->name); ?></a>
            </section>
            <h1 class="post-full-title"><?php echo $blog->title; ?></h1>
            <div class="post-full-byline">
                <section class="post-full-byline-content">
                    <ul class="author-list">
                        <li class="author-list-item">
                            <div class="author-card">
                                <img class="author-profile-image" src="/content/images/size/w100/2019/12/qasim-1.jpg" alt="Qasim Hussain">
                                <div class="author-info">
                                    <h2>Qasim Hussain</h2>
                                    <p>Read <a href="/author/qasim/">more posts</a> by this author.</p>
                                </div>
                            </div>
                            <a href="/author/qasim/" class="author-avatar">
                            <img class="author-profile-image" src="/content/images/size/w100/2019/12/qasim-1.jpg" alt="Qasim Hussain">
                            </a>
                        </li>
                    </ul>
                    <section class="post-full-byline-meta">
                        <h4 class="author-name"><a href="/author/qasim/">Qasim Hussain</a></h4>
                        <div class="byline-meta-content">
                            <time class="byline-meta-date" datetime="2019-12-10"><?php echo date('d/m/Y', strtotime($blog->created_at)); ?></time>
                            <span class="byline-reading-time"><span class="bull">.</span> 2 min read</span>
                        </div>
                    </section>
                </section>
            </div>
        </header>
        <figure class="post-full-image">
            <img srcset="<?php echo FCPATH.BLOGS.$blog->image; ?>" sizes="(max-width: 800px) 400px,(max-width: 1170px) 1170px,2000px" src="<?php echo FCPATH.BLOGS.$blog->image; ?>" alt="">
        </figure>
        <section class="post-full-content">
            <div class="post-content">
            <?php echo $blog->description; ?>
            <?php include 'side.php'; ?>
            </div>
        </section>
    </article>
</div>