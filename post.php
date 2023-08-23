<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-page-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>

        <div class="img-container">
            <img src="<?= $BASE_URL ?>/assets/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-page-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, accusantium.
            Voluptatibus
            hic, nihil voluptate itaque impedit, commodi doloremque laboriosam cupiditate expedita minima rem quaerat
            dolor, repudiandae laudantium doloribus quasi? Modi?
            Libero voluptatem ipsum iure id porro repellendus sint voluptate itaque earum at dolores minima, ipsam enim
            alias natus, expedita odio rem fugiat pariatur accusamus? Ipsa ad a consequuntur sapiente necessitatibus?
            Facilis ipsum cum minus quo, corporis, ratione eaque, non quibusdam libero fugiat ullam a qui aliquid vel?
            Velit amet suscipit consectetur consequatur quaerat unde saepe illum. Molestiae aperiam illo ab.
            Repellendus quae modi omnis eos. Iste quos cum nihil harum magnam qui dicta a unde! Sit sunt quaerat,
            molestias veniam delectus ipsa eum consequatur inventore obcaecati consectetur iusto in labore.
            Ullam dolore modi hic illo ad iure architecto! Rem magni vero quasi expedita laudantium assumenda sunt ex ea
            eveniet debitis. Porro id necessitatibus aliquid ad dolorum suscipit quas minima ipsa.</p>
        <p class="post-page-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, accusantium.
            Voluptatibus
            hic, nihil voluptate itaque impedit, commodi doloremque laboriosam cupiditate expedita minima rem quaerat
            dolor, repudiandae laudantium doloribus quasi? Modi?
            Libero voluptatem ipsum iure id porro repellendus sint voluptate itaque earum at dolores minima, ipsam enim
            alias natus, expedita odio rem fugiat pariatur accusamus? Ipsa ad a consequuntur sapiente necessitatibus?
            Facilis ipsum cum minus quo, corporis, ratione eaque, non quibusdam libero fugiat ullam a qui aliquid vel?
            Velit amet suscipit consectetur consequatur quaerat unde saepe illum. Molestiae aperiam illo ab.
            Repellendus quae modi omnis eos. Iste quos cum nihil harum magnam qui dicta a unde! Sit sunt quaerat,
            molestias veniam delectus ipsa eum consequatur inventore obcaecati consectetur iusto in labore.
            Ullam dolore modi hic illo ad iure architecto! Rem magni vero quasi expedita laudantium assumenda sunt ex ea
            eveniet debitis. Porro id necessitatibus aliquid ad dolorum suscipit quas minima ipsa.</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categories</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>