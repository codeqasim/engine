<div class="col-md-4">
    <div class="clearfix"></div>
    <div class="panel panel-default">
        <div class="panel-heading go-text-right">Quick Search</div>
        <div class="panel-body">
            <form id="blog-search-form" action="#" method="POST">
                <div class="input-group RTL">
                    <input type="text" name="keyword" required="" placeholder="Search What?" class="form-control sub_email">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="list-group">
        <div class="panel panel-default">
            <div class="panel-heading go-text-right">Categories and Posts</div>
            <?php foreach($categories as $c){ ?>
            <a href="<?php echo base_url('blog/'.strtolower(str_replace(' ','-',$c->name))); ?>" class="list-group-item post-detail">
                <strong class="go-right"><?php echo $c->name; ?></strong> <span class="go-left badge badge-primary"><?php echo $c->total; ?></span>
                <div class="clearfix"></div>
            </a>
            <?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#blog-search-form').submit((e) => {
            e.preventDefault();
            var fields = $('#blog-search-form').serializeArray();
            var slug = 'blog/search/';
            keyword = fields[0].value;
            slug += keyword.replace(/\s+/g, '-').toLowerCase();
                
            window.location = "<?php echo base_url(); ?>" + slug;
        });
    });
</script>