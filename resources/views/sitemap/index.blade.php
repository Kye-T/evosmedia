<?php use Vanilo\Product\Models\Product;
use Vanilo\Category\Models\Taxonomy;
use Vanilo\Category\Models\Taxon;
header('Content-Type: text/xml');
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php Product::all()->each(function($product) {
	echo "<url><loc>";
	echo route('product.show', $product);
	echo "</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>";
}); ?>

<?php Taxon::all()->each(function($taxonomy) {
	echo "<url><loc>";
	echo route('product.category', [$taxonomy->taxonomy->name, $taxonomy]);
	echo "</loc><changefreq>monthly</changefreq><priority>0.8</priority></url>";
});

foreach(['https://evosmedia.uk', 'https://evosmedia.uk/login', 'https://evosmedia.uk/register', 'https://evosmedia.uk/shop/index', 'https://evosmedia.uk/cart/show', 'https://evosmedia.uk/home'] as $link): ?>
	<url>
		<loc><?= $link; ?></loc>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>
<?php endforeach; ?>
</urlset>
