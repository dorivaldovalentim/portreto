Common WordPress template files #Common WordPress template files
Below is a list of some basic theme templates and files recognized by WordPress.

index.php
    The main template file. It is required in all themes.

style.css
    The main stylesheet. It is required in all themes and contains the information header for your theme.

rtl.css
    The right-to-left stylesheet is included automatically if the website language’s text direction is right-to-left.

comments.php
    The comments template.

front-page.php
    The front page template is always used as the site front page if it exists, regardless of what settings on Admin > Settings > Reading.

home.php
    The home page template is the front page by default. If you do not set WordPress to use a static front page, this template is used to show latest posts.

header.php
    The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.

singular.php
    The singular template is used for posts when single.php is not found, or for pages when page.php are not found. If singular.php is not found, index.php is used.

single.php
    The single post template is used when a visitor requests a single post.

single-{post-type}.php
    The single post template used when a visitor requests a single post from a custom post type. For example, single-book.php would be used for displaying single posts from a custom post type named book. The index.php is used if a specific query template for the custom post type is not present.

archive-{post-type}.php
    The archive post type template is used when visitors request a custom post type archive. For example, archive-books.php would be used for displaying an archive of posts from the custom post type named books. The archive.php template file is used if the archive-{post-type}.php is not present.

page.php
    The page template is used when visitors request individual pages, which are a built-in template.

page-{slug}.php
    The page slug template is used when visitors request a specific page, for example one with the “about” slug (page-about.php).

category.php
    The category template is used when visitors request posts by category.

tag.php
    The tag template is used when visitors request posts by tag.

taxonomy.php
    The taxonomy term template is used when a visitor requests a term in a custom taxonomy.

author.php
    The author page template is used whenever a visitor loads an author page.

date.php
    The date/time template is used when posts are requested by date or time. For example, the pages generated with these 

    slugs:
        http://example.com/blog/2014/
        http://example.com/blog/2014/05/
        http://example.com/blog/2014/05/26/

archive.php
    The archive template is used when visitors request posts by category, author, or date. Note: this template will be overridden if more specific templates are present like category.php, author.php, and date.php.

search.php
    The search results template is used to display a visitor’s search results.

attachment.php
    The attachment template is used when viewing a single attachment like an image, pdf, or other media file.

image.php
    The image attachment template is a more specific version of attachment.php and is used when viewing a single image attachment. If not present, WordPress will use attachment.php instead.

404.php
    The 404 template is used when WordPress cannot find a post, page, or other content that matches the visitor’s request.